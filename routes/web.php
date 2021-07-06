<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\InicioController;
use App\http\Controllers\ProductosController;

Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');

Route::resource('productos', ProductosController::class);

