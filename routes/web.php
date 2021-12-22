<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', function () {
    return view('welcome');
});
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

Route::get('/', function () {
    return view('index');
});

Route::get('/tus-eventos', function () {
    return view('tusEventos');
})->name('tus-eventos');

Route::get('/proximos-eventos', function () {
    return view('proximosEventos');
})->name('proximos-eventos');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::resource('usuarios',UsuarioController::class);
Route::resource('eventos',EventoController::class);
Route::resource('tickets',TicketController::class);
