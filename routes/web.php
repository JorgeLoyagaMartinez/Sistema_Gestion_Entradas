<?php

use App\Http\Controllers\EventosController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

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

Route::resource('usuarios',UsuariosController::class);
Route::resource('eventos',EventosController::class);
Route::resource('tickets',TicketsController::class);