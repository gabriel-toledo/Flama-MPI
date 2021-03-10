<?php

namespace App\Http\Controllers;

use App\Interfaces\IUsuarioRepository;
use App\Interfaces\IEstoqueRepository;
use Illuminate\Routing\Controller;


class EstoqueController extends Controller
{
    protected $estoqueRepository;
    protected $usuarioRepository;

    public function __construct(IEstoqueRepository $estoqueRepository,
                                IUsuarioRepository $usuarioRepository){
        $this->estoqueRepository = $estoqueRepository;
        $this->usuarioRepository = $usuarioRepository;
    }

    public function getEstoque($idEstoque)
    {
        $estoque = $this->estoqueRepository->find($idEstoque)->with('gerente');
        return view('estoque.estoque', compact('estoque'));
    }

    public function editarEstoque($idEstoque)
    {
    }
}
