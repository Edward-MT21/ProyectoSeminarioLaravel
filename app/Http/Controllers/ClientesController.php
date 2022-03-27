<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getClientes(){
        return view('clientes.clientes_index');
    }

    public function getEdit(){
        return view('clientes.clientes_edit');
    }

    public function getCreate(){
        return view('clientes.clientes_create');
    }
}
