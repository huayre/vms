<div id="modal-ingresar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">ENTRADA DE VEHÍCULO</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-dismiss="modal">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    @csrf
                            <div class="col-md-12 form-group">
                                <label>PLACA</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>CHOFER</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>PORTERO</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>CONTROL DE ACCESO</label>
                                <input type="text"  class="form-control"  value="COTROL X" disabled>
                            </div>
                            <div class="col-md-12 mx-5">
                                <label>CARGADO</label>
                                <div class="row ">
                                    <div class="form-check col">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check col">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            No
                                        </label>
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


