<div id="modal-editar-transporte" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">EDITAR TRANSPORTE</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-dismiss="modal">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                            <div class="col-md-12 form-group">
                                <label>PLACA</label>
                                <input type="text"  class="form-control"  value="Placa seleccionado" disabled>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>TIPO DE VEHÍCULO</label>
                                <select class="form-control">
                                    <option>Tipo 1</option>
                                    <option>Tipo 2</option>
                                    <option>Tipo 3</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>CAPACIDAD EN PALLETS</label>
                                <input type="text"  class="form-control"  value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>TRANSPORTISTA</label>
                                <select class="form-control">
                                    <option>Transportista 1</option>
                                    <option>Transportista 2</option>
                                    <option>Transportista 3</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text"  class="form-control"  value="TRANSPORTISTA SELECCIONADO" disabled>
                            </div>
                    <div class="col-md-12">
                        <h5 class="text-center">TIPO DE VEHÍCULO</h5>
                        <div class="row ">
                            <div class="form-check col">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Vehículo cerrado
                                </label>
                            </div>
                            <div class="form-check col">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Vehículo refrigerado
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


