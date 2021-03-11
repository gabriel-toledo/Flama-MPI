<?php

namespace App\Http\Controllers;

use App\Interfaces\ICarrinhoProdutoRepository;
use App\Interfaces\ICarrinhoRepository;
use App\Interfaces\IProdutoRepository;
use App\Interfaces\IClienteRepository;
use App\Models\Carrinho;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;


class ProdutoController extends Controller
{
    protected $produtoRepository;
    protected $carrinhoRepository;
    protected $clienteRepository;
    protected $carrinhoProdutoRepository;

    public function __construct(IProdutoRepository $produtoRepository,
                                ICarrinhoRepository $carrinhoRepository,
                                IClienteRepository $clienteRepository,
                                ICarrinhoProdutoRepository $carrinhoProdutoRepository){
        $this->produtoRepository = $produtoRepository;
        $this->carrinhoRepository = $carrinhoRepository;
        $this->clienteRepository = $clienteRepository;
        $this->carrinhoProdutoRepository = $carrinhoProdutoRepository;
    }

    public function getProduto($idProduto)
    {
        $produto = $this->produtoRepository->find($idProduto);
        $cliente = $this->clienteRepository->find(1)->first();
        return view('produto.produto', compact(['produto', 'cliente']));
    }

    public function comprarAgora($idProduto, $quantidade)
    {
        $this->adicionarProduto($idProduto, $quantidade);
        return $this->clienteRepository->find(1)->idCarrinho;
    }
    
    public function adicionarProduto($idProduto, $quantidade)
    {
        $produto = $this->produtoRepository->find($idProduto);
        $cliente = $this->clienteRepository->find(1)->with(['usuario', 'carrinho', 'produtos'])->first();
        if($cliente->idCarrinho != null) {
            for($i=0; $i < $quantidade; $i++) {
                $this->carrinhoProdutoRepository->create(['idCarrinho' => $cliente->idCarrinho, 'idProduto' => $idProduto, 'nomeProduto' => $produto->nomeProduto, 'preco' => $produto->preco]);
                $cliente->carrinho->precoTotal += $produto->preco;
                $cliente->carrinho->save();
            }
        }
        else {
            $this->carrinhoRepository->create(['precoTotal' => $produto->preco]);
            $idCarrinho = (int)Carrinho::max('idCarrinho');
            $cliente->idCarrinho = $idCarrinho;
            $cliente->save();
            $this->carrinhoProdutoRepository->create(['idCarrinho' => $idCarrinho, 'idProduto' => $idProduto]);
            $cliente = $this->clienteRepository->find(1)->with(['usuario', 'carrinho', 'produtos'])->first();
            for($i=0; $i < $quantidade; $i++) {
                $this->carrinhoProdutoRepository->create(['idCarrinho' => $cliente->idCarrinho, 'idProduto' => $idProduto, 'nomeProduto' => $produto->nomeProduto, 'preco' => $produto->preco]);
                $cliente->carrinho->precoTotal += $produto->preco;
                $cliente->carrinho->save();
            }
        }
    }
}
