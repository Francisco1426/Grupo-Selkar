<form action="{{ url('/productos/producto')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal" id="ModalCreate" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alta Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label for="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="" placeholder="Introduce el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion:</label>
                        <input type="text" class="form-control" name="descripcion" id=""
                            placeholder="Introduce la descripcion">
                    </div>

                    <div class="form-group">
                        <label for="">Foto:</label>
                        <input type="file" class="form-control" name="" id="">
                    </div>


                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</form>
