<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductosController extends Controller
{

    public function index()
    {

        try {

            $productos = Producto::all();
            //$categories = Category::all();
            //notify()->success('Conexión BD exitosa!');
            return view('productos.index', ['productos' => $productos]);
            //return view('productos.index', ['productos' => $productos, 'categories' => $categories]);

        }catch(\Exception $e) {

            drakify('error');
            return view('home');

        }  

    }

    public function store(Request $request) {

        $request->validate([
            'nombre' => 'required|min:3',
        ]);
    
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        //$producto->nombre = $request->nombre;
        //$producto->nombre = $request->nombre;
        //$producto->nombre = $request->nombre;
        //$producto->nombre = $request->nombre;
        //$producto->category_id = $request->category_id;
        $producto->save();
    
        return redirect()->route('productos')->with('success', 'Producto creado satisfactoriamente!');
    }

    public function show($id) {

        $productos = Producto::all();
        try {
            $producto = Producto::find($id);
            if($producto !=null) {
                //$categories = Category::all();
                return view('productos.show', ['producto' => $producto]);
                //return view('todos.show', ['todo' => $todo, 'categories' => $categories]);
            }else {
                
                notify()->error('¡Producto no encontrado!');
                return view('productos.index', ['productos' => $productos]);
            }

        }catch(\Exception $e) {

            notify()->error('¡Producto no encontrado!');
            return view('productos.index', ['productos' => $productos]);

        }

    }

    public function destroy($id){

        $productos = Producto::all();
        try {
            $producto = Producto::find($id);
            $producto->delete();
            notify()->success('Producto eliminado satisfactoriamente!');
            return redirect()->route('productos')->with('success', 'Producto eliminado satisfactoriamente');

        }catch(\Exception $e) {

            notify()->error('¡Producto a eliminar no encontrado!');
            return view('productos.index', ['productos' => $productos]);

        }        

    }

    public function update(Request $request, $id){

        $productos = Producto::all();
        try {

        $producto = Producto::find($id);
        
        $producto->nombre = $request->nombre;
        $producto->imagen = $request->imagen;
        //dd($producto);
        $producto->save();
        notify()->success('Producto editado satisfactoriamente!');
        return redirect()->route('productos')->with('success', 'Producto actualizado satisfactoriamente');

        }catch(\Exception $e) {

            notify()->error('¡Producto a editar no encontrado!');
            return view('productos.index', ['productos' => $productos]);

        }
        
    }


    public function getProductos(){
        return view('productos.productos_index');

    }

    public function getCreate(){
        return view('productos.productos_create');

    }

    public function getEdit(){
        return view('productos.productos_edit');

    }
}
