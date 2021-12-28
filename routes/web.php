<?php


use App\Http\Controllers\EventosController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

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

//FUNCIONES DE CALLBACK
/*Route::get('/usuarios', function () {
    $arrayNombre = ["Jorge Loyaga", "Lucas","Juan Ignacio"];
    return view('usuarios.usuarios')->with("parametroArrayNombre",$arrayNombre);
});*/

/*Route::get('/usuarios',[UsuarioController::class,'index'])->("listadito");
Route::post('/usuarios',[UsuarioController::class,'store']);
Route::delete('/usuarios',[UsuarioController::class,'destroy']);
Route::put('/usuarios',[UsuarioController::class,'update']);

// /usuarios/58
Route::get('usuarios/{id}', [UsuarioController::class, 'show']);
Route::resource('usuarios',UsuarioController::class)->except('destroy','update');

Route::resource('usuarios',UsuarioController::class)->only('destroy','update');*/


// Route::get('/clientes', [ClientesController::class, 'index'])->name("listadito");

Route::get('/', [EventosController::class, 'index'])->name('inicio');
Route::get('/tus-eventos/{categoria}', [EventosController::class, 'categoryFilter'])->name('categorias');

Route::get('/tus-eventos', [EventosController::class, 'Listado'])->name('tus-eventos');

Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

Route::get('/detalle', function () {
    return view('detalle');
})->name('detalle');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('/pago', function () {
    return view('pago');
})->name('pago');

Route::get('/registro', function () {
    return view('no-tengo-cuenta');
})->name('registro');

Route::get('/eticket', function () {
    return view('eticket');
})->name('eticket');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/perfil', function () {
    return view('perfil-logueado');
})->name('perfil-logueado');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::resource('eventos', EventosController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('usuarios', UsuariosController::class);

Route::get('/login', function () {
    return view('login');
})->name('login');
