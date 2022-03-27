<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionesController extends Controller
{
    public function getLogin(){

        return view('auth.login');
    }

    public function getLogout(){

        return redirect()->route("home");
    }

    public function getRegister(){

        return view('auth.register');
    }
    
}
