<?php

namespace App\Http\Controllers;

use App\Interfaces\ICarrinhoRepository;
use App\Repository\ProdutoRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;


class CarrinhoController extends Controller
{
    protected $carrinhoRepository;

    public function __construct(ICarrinhoRepository $carrinhoRepository){
        $this->carrinhoRepository = $carrinhoRepository;
    }

    public function getCarrinho($idCarrinho)
    {
        $carrinho = $this->carrinhoRepository->find($idCarrinho)->with('produtos')->first();
        for($i=0; $i <= 9; $i++)
            $produtos[] = 0;
        foreach($carrinho->produtos as $produto) 
            $produtos[$produto->idProduto] = array(['quantidade' => 0, 'nome' => $produto->nomeProduto, 'preco' => $produto->preco]);
        foreach($carrinho->produtos as $produto) 
            $produtos[$produto->idProduto][0]['quantidade'] += 1;
        return view('carrinho.carrinho', compact(['carrinho', 'produtos']));
    }

    public function editarCarrinho ($idCarrinho)
    {
    }
}
