<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return view("system.clientes.index");
    }

    public function create()
    {
        return view('system.clientes.create');
    }
}
