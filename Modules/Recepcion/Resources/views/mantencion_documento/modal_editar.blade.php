<div id="modal-editar" class="modal fade">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">EDITAR DOCUMENTO DE RECEPCIÓN</h4>
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
                                <label>NÚMERO RECEPCIÓN</label>
                                <input type="text"  class="form-control"  value="" disabled>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>TIPO DOCUMENTO</label>
                                <select class="form-control" disabled>
                                    <option>TIPO 1</option>
                                    <option>TIPO 2</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>NÚMERO DOCUMENTO</label>
                                <input type="text"  class="form-control"  value="" disabled>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>DOC. REFERENCIA</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>BODEGA ORIGEN</label>
                                <select class="form-control" disabled>
                                    <option>Bodega 1</option>
                                    <option>Bodega 2</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 form-group">
                                <label>ESTADO</label>
                                <input type="text"  class="form-control"  value="Pendiente" disabled>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>FECHA EMISIÓN</label>
                                <input type="date"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>FECHA ESTIMADA</label>
                                <input type="date"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>EMISOR</label>
                                <input type="text"  class="form-control"  value="MELTEK" disabled>
                            </div>

                        </div>
                        <div class="col-md-12 form-group">
                            <label>Transportista</label>
                            <select class="form-control">
                                <option>transportista 1</option>
                                <option>transportista 2</option>
                            </select>
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
