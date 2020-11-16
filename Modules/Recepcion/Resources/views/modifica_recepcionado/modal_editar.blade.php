<div id="modal-editar" class="modal fade">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">MODIFICA DOCUMENTO DE RECEPCIÓN</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-dismiss="modal">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12 form-group">
                                <label>NÚMERO DE ETIQUETA</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>LINEA</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>ARTÍCULO</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text"  class="form-control"  value="articulos seleccionado" disabled>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 form-group">
                                <label>UNIDAD MEDIDA</label>
                                <input type="text"  class="form-control"  value="Pendiente" >
                            </div>
                            <div class="col-md-12 form-group">
                                <label>CANTIDAD</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>CANTIDAD UNIDADES</label>
                                <input type="text"  class="form-control"  value="">
                            </div>


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
