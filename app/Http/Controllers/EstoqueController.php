<?php

namespace App\Http\Controllers;

use App\Interfaces\ICarrinhoProdutoRepository;
use App\Interfaces\ICarrinhoRepository;
use App\Interfaces\IUsuarioRepository;
use App\Interfaces\IProdutoRepository;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class EstoqueController extends Controller
{
    protected $produtoRepository;
    protected $carrinhoProdutoRepository;
    protected $carrinhoRepository;
    protected $usuarioRepository;

    public function __construct(IProdutoRepository $produtoRepository,
                                ICarrinhoProdutoRepository $carrinhoProdutoRepository,
                                ICarrinhoRepository $carrinhoRepository,
                                IUsuarioRepository $usuarioRepository){
        $this->produtoRepository = $produtoRepository;
        $this->carrinhoProdutoRepository = $carrinhoProdutoRepository;
        $this->carrinhoRepository = $carrinhoRepository;
        $this->usuarioRepository = $usuarioRepository;
    }

    public function getEstoque($idEstoque)
    {
        $produtos = $this->produtoRepository->findWhere(['idEstoque' => $idEstoque]);
        return view('estoque.estoque', compact('produtos'));
    }

    public function adicionarProdutoEstoque()
    {
        $produto = new Produto();
        $idEstoque = 1;
        return view('estoque.adicionarProduto', compact(['produto', 'idEstoque']));
    }

    public function editarProduto($idProduto)
    {        
        $produto = $this->produtoRepository->find($idProduto);
        $idEstoque = 1;        
        return view('estoque.editarProduto', compact(['produto', 'idEstoque']));
    }


    public function salvar(Request $request)
    {
        try {
            $idProduto = (int)$request->idProduto;
            if($request->acao == 'ADD') {
                $dataProduto = [
                    'nomeProduto'   => $request->nomeProduto,
                    'quantProduto'  => $request->quantProduto,
                    'preco'         => $request->preco,
                    'descricao'     => $request->descricao,
                    'idEstoque'     => $request->idEstoque
                ];
                $this->produtoRepository->create($dataProduto);
            }
            else {
                $dataProduto = [
                    'idProduto'     => $idProduto,
                    'nomeProduto'   => $request->nomeProduto,
                    'quantProduto'  => $request->quantProduto,
                    'preco'         => $request->preco,
                    'descricao'     => $request->descricao,
                    'idEstoque'     => $request->idEstoque
                ];
                $this->produtoRepository->update($dataProduto, $idProduto);
            }
            return response()->json(['sucess' => 'Salvo com sucesso!', 'redirectUrl' => route('estoque.show', $request->idEstoque)]);
        }
        catch (\Exception $e) {
            return response()->json(['exception' => true, 'errors' => $e->getMessage()], 422);
        }
    }

    public function excluir($idProduto)
    {
        $produto = $this->produtoRepository->find($idProduto);
        $carrinhoProdutos = $this->carrinhoProdutoRepository->findWhere(['idProduto' => $idProduto]);
        $idsCarrinhoProduto = [];
        $idsCarrinho = [];
        foreach($carrinhoProdutos as $carrinhoProduto) {
            $idsCarrinhoProduto[] = $carrinhoProduto->idCarrinhoProduto;
            $idsCarrinho[] = $carrinhoProduto->idCarrinho;
        }
        foreach($idsCarrinho as $idCarrinho) {
            $carrinho = $this->carrinhoRepository->find($idCarrinho);
            $carrinho->precoTotal -= $produto->preco;
            $carrinho->save();
        }
        foreach($idsCarrinhoProduto as $id)
            $this->carrinhoProdutoRepository->delete($id);
        $this->produtoRepository->delete($idProduto);
        return response()->json(['sucess' => 'Registro deletado com sucesso']);
    }
}
