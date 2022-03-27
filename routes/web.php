<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CatalogoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*


Route::get('login', function () {
    return view('auth.login');
});

Route::get('catalog', function () {
    return view('catalog.index');
});

Route::get('catalog/show/{id}', function ($id) {
    return view('catalog.show', array('id'=>$id));
});

Route::get('catalog/create', function () {
    return view('catalog.create');
});

Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog.edit', array('id'=>$id));
});

Route::post('logout', function () {
    return "Saliendo de la sesión";
});

//Route::get('user',	'UserController@showProfile');
//Route::get('/user', [UserController::class, 'showProfile']);

Route::get('/server', ProvisionServer::class);

Route::get('/consulta', [UserController::class, 'index']);

*/

/*
Route::get('/home','App\Http\Controllers\HomeController@getHome');

// sesiones

Route::POST('/login','App\Http\Controllers\SesionesController@getLogin');

Route::get('/logout','App\Http\Controllers\SesionesController@getlogout');

Route::get('/register','App\Http\Controllers\SesionesController@getRegister');

// productos

Route::get('/productos','App\Http\Controllers\ProductosController@getProductos');

Route::get('/productos/edit','App\Http\Controllers\ProductosController@getEdit');

Route::get('/productos/create','App\Http\Controllers\ProductosController@getCreate');


// clientes

Route::get('/clientes','App\Http\Controllers\ClientesController@getClientes');

Route::get('/clientes/edit','App\Http\Controllers\ClientesController@getEdit');

Route::get('/clientes/create','App\Http\Controllers\ClientesController@getCreate');*/

/*
Route::get('/getproductos', [UserController::class, 'getProductos']);

Route::get('/productoslista', [UserController::class, 'index']);

Route::get('/profile', [UserController::class, 'index']);

Route::get('/filtro',	[UserController::class, 'index'])->middleware('es_mayor');*/
/*
Route::get('/filtro/{id}',	['middleware'	=>	['auth',	'es_mayor'],	function	()	{
    return "<h1>Paso el middelware </h1>";
}]);

Route::get('/', function () {
    return view('/producto');
});

Route::get('/filtro/{id}',	['middleware'	=>	['es_mayor'],	function	()	{
    return "<h1>Paso el middelware </h1>";
}]);

Route::get('/f/{id}',	['middleware'	=>	'es_mayor:9',	function	($id)	{
    //
    return "<h1>Paso el middelware prueba </h1>";
}]);


Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('catalog', function () {
    return view('catalog.index');
});

Route::get('catalog/show/{id}', function ($id) {
    return view('catalog.show', array('id'=>$id));
});

Route::get('catalog/create', function () {
    return view('catalog.create');
});

Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog.edit', array('id'=>$id));
});

Route::post('logout', function () {
    return "Saliendo de la sesión";
});

//Route::get('user',	'UserController@showProfile');
//Route::get('/user', [UserController::class, 'showProfile']);

Route::get('/server', ProvisionServer::class);

Route::get('/consulta', [UserController::class, 'index']);*/



//Route::get('/productos', ProductosController::class . '@index')->name('productos');
//Route::get('/productos', ProductosController::class . '@index')->name('productos');

/*
Route::get('/productos', function () {
    return view('productos.index');
})->name('productos');*/

Route::get('/', function () {
    return view('home');
});

Route::get('/productos', [ProductosController::class, 'index'])->name('productos')->middleware('auth');;

Route::post('/productos', [ProductosController::class, 'store'])->name('productos')->middleware('auth');;

Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos-edit')->middleware('auth');;

Route::patch('/productos/{id}', [ProductosController::class, 'update'])->name('productos-update')->middleware('auth');;
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('productos-destroy')->middleware('auth');;



//Route::delete('/todos/{id}', [TodosController::class , 'destroy'])->name('todos-destroy');

//Route::get('/todos/{id}', [TodosController::class , 'show'])->name('todos-edit');

//Route::patch('/todos/{id}', [TodosController::class , 'update'])->name('todos-update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//->middleware('auth');
Route::get('/logout', [LoginController::class , 'logout'])->name('logout');


Route::get('/nosotros', function () {
    return view('nosotros.institucional');
    //return "<h1> Nosotros </h1>";
});

Route::get('/contactos', function () {
    return view('contactos.direcciones');
    //return "<h1> Contactos </h1>";
});

Route::post('/iniciarSesion',	['middleware'	=>	['auth'],	function	()	{
    return "<h1> Logueado </h1>";
}]);

Route::get('/estadisticas', function () {
    //return view('contactos.direcciones');
    return "<h1> Estadisticas </h1>";
});

Route::get('/catalogo/index', [CatalogoController::class , 'getIndex'])->name('catalogo_index');
Route::get('/catalogo/show/{id}', [CatalogoController::class , 'getShow'])->name('catalogo_show');

Route::get('/registrarUsuario','App\Http\Controllers\SesionesController@getRegister');

//Route::resource('productorest', 'ProductorestController');


