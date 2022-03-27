<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

	/**
	*	Mostrar	información	de	un	usuario.
	*	@param	int		$id
	*	@return	Response
	*/
    public function showProfile()
    {
        //$user	=	User::findOrFail($id);
        //return	view('user.profile',	['user'	=>	$user]);
        return	view('vistaPrueba');
    }

    /*

    public function index()
    {
        $productos = DB::select('select * from productos where IDPRODUCTO = ?', [1]);
 
        return view('user.index', ['productos' => $productos]);
    }    */  

    
    
    public function index()
    {
        $products = DB::table('productos')->get();
        return $products;
    }

    public function getProductos(){
        $productos = DB::table('productos')->get();
        return view('productos.productos_index', ['productos' => $productos]);
        //return	view('productos.catalogo');

    }    

}
