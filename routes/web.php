<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\InicioController;

Route::get('Inicio', [InicioController::class,'Inicio'])->name('Inicio');
Route::group(['middleware' => ['role:cliente']], function () {
    //rutas accesibles solo para clientes
});
