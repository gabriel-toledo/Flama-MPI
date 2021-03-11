<?php

namespace App\Http\Controllers;

use App\Interfaces\IUsuarioRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UsuarioController extends Controller
{
    protected $usuarioRepository;

    public function __construct(IUsuarioRepository $usuarioRepository){
        $this->usuarioRepository = $usuarioRepository;
    }

    public function getUsuario()
    {
        $usuario = $this->usuarioRepository->find(1);
        return view('usuario.usuario', compact('usuario'));
    }

    public function salvar(Request $request)
    {
        $idUsuario = (int)$request->idUsuario;
        $dataUsuario = [
            'idUsuario' => $idUsuario,
            'nome'      => $request->nome,
            'cpf'       => $request->cpf,
            'sexo'      => $request->sexo,
            'telefone'  => $request->telefone,
            'email'     => $request->email
        ];
        $this->usuarioRepository->update($dataUsuario, $idUsuario);
        return response()->json(['sucess' => 'Dados atualizados com sucesso']);
    }
}
