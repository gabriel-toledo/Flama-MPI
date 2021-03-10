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
        $carrinho = $this->carrinhoRepository->find($idCarrinho)->with('produtos');
        return view('carrinho.carrinho', compact('carrinho'));
    }

    public function editarCarrinho ($idCarrinho)
    {
    }
}
