@extends('Principla')

@section('contenido')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Productos</h3>
                    <p class="panel-subtitle">Se muestran todos los productos que tienes dados de alta</p>
                </div>
                <div class="panel-body">

                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#ModalCreate">Nuevo Producto</a>
                    <br><br>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Clave</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($productos as $producto)
                                    <tr>
                                        <th scope="row">{{$producto->id}}</th>
                                        <td>{{$producto->nombre}}</td>
                                        <td>{{$producto->descripcion}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning" data-toggle="modal"
                                                data-target="#ModalEdit">Modificar</a>
                                            <button class="btn btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
</div>
@include('system.productos.create')
@include('system.productos.edit')


@stop