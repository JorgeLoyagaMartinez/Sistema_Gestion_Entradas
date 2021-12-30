<?php

use App\Http\Controllers\EventosController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::resource('eventos', EventosController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('usuarios', UsuariosController::class);

Route::get('/', [EventosController::class, 'index'])->name('inicio');

Route::get('/tus-eventos', [EventosController::class, 'Listado'])->name('tus-eventos');

Route::get('/tus-eventos/{categoria}', [EventosController::class, 'categoryFilter'])->name('categorias');

Route::get('/eventos/{id}', [EventosController::class, 'show'])->name('detalle');

Route::get('/crear-evento', [EventosController::class, 'create'])->name('crear-evento');

Route::post('/admin', [EventosController::class, 'store'])->name('admin');

Route::get('/eventos/{evento}/editar', [EventosController::class, 'edit'])->name('eventos.edit');

Route::put('/eventos/{evento}', [EventosController::class, 'update'])->name('evento-editado');

Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

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

Route::get('/admin', function () {
    return view('perfil-admin');
})->name('admin');





