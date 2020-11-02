<div id="modal-crear-articulos" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">REGISTRAR ARTÍCULO</h4>
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
                                <label>NOMBRE LARGO</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>NOMBRE CORTO</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>PAÍS ORIGEN</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>CLASE</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>CLASIFICACIÓN</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 form-group">
                                <label>INACTIVIDAD</label>
                                <input type="text"  class="form-control" value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>UNIDAD DE MEDIDA</label>
                                <input type="text"  class="form-control" value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>ZONA ALMACENAJE</label>
                                <input type="text"  class="form-control" value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>PRODUCE EMANACIONES</label>
                                <input type="text"  class="form-control" value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>PERMEABLE A EMANACIONES</label>
                                <input type="text"  class="form-control" value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>TIPO ALMACENAJE</label>
                                <input type="text"  class="form-control" value="">
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


