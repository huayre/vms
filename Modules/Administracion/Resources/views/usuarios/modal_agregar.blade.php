<div id="modal-create-usuario" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">REGISTRAR USUARIO</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-dismiss="modal">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>IDENTIFICACIÓN</label>
                            <input type="text"  class="form-control" placeholder="Identidicación del Usuario" value="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="rol_nombre">NOMBRE</label>
                            <input type="text"  class="form-control" placeholder="Nombre del Usuario" value="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="rol_nombre">ROL</label>
                            <select class="form-control">
                                <option>Vendedor</option>
                                <option>Administrador</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="rol_nombre">CLAVE</label>
                            <input type="password"  class="form-control" >
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="rol_nombre">CONFI. CLAVE</label>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"> <i class="fas fa-times-circle"></i> Limpiar</button>
                    <button type="button" class="btn btn-success"> <i class="fas fa-save"></i> Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


