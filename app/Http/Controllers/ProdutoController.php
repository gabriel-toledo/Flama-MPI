<?php

namespace App\Http\Controllers;

use App\Interfaces\ICarrinhoRepository;
use App\Interfaces\IProdutoRepository;
use App\Repository\ProdutoRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;


class ProdutoController extends Controller
{
    protected $produtoRepository;
    protected $carrinhoRepository;

    public function __construct(IProdutoRepository $produtoRepository,
                                ICarrinhoRepository $carrinhoRepository){
        $this->produtoRepository = $produtoRepository;
        $this->carrinhoRepository = $carrinhoRepository;
    }

    public function getProduto($idProduto)
    {
        $produto = $this->produtoRepository->find($idProduto);
        return view('produto.produto', compact('produto'));
    }

    public function adicionarProduto($idProduto)
    {
        $produto = $this->produtoRepository->find($idProduto);
        $carrinhoRepository = $this->carrinhoRepository->create(['']);
    }
}
