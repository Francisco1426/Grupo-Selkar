<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\InicioController;

Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');
