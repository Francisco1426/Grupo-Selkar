<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\InicioController;
use App\http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;

Route::get('/system.dashboard', [InicioController::class,'Inicio'])->name('Inicio');
Route::resource('productos', ProductosController::class);
Route::resource('clientes', ClientesController::class);

