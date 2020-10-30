<div id="modal-create-rol" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formRL" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">REGISTRAR ROL</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-dismiss="modal">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" id="rol" name="rol" value="">

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="rol_nombre">DESCRIPCIÓN</label>
                            <input type="text" id="rol_nombre" name="rol_nombre" class="form-control" placeholder="Descripción del rol" value="">
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


