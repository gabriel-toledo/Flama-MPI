<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;


class UsuarioController extends Controller
{

    public function __construct(){
    }

    public function getUsuario()
    {
        return view('usuario.usuario');
    }

    public function editarusuario ($idUsuario)
    {
    }
}
