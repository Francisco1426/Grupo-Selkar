<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Session;

class ProductosController extends Controller
{
<<<<<<< HEAD
    public function index()

    {
        return view('system.productos.index');
    }
}
=======

   public function index()
   {
        $productos = producto::paginate();
       return view('system.productos.index',compact('productos'));   
   }

   public function create()
   {
       return view('system.productos.create');
   }

   public function store(Request $request)
   {
       $productos = new producto;
       $productos->nombre = $request->nombre;
       $productos->descripcion = $request->descripcion;
       $productos->save();
   }

   public function destroy($id)
   {
      
   }


}
>>>>>>> main
