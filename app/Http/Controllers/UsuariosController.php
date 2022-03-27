<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function getLogin(){

        return view('usuarios.usuarios_index');
    }
}
