<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\InicioController;

Route::get('Inicio', [InicioController::class,'Inicio'])->name('Inicio');