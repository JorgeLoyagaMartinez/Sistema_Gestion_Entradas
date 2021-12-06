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

Route::resource('usuarios',UsuarioController::class);
Route::resource('eventos',EventoController::class);
Route::resource('tickets',TicketController::class);