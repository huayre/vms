<div id="modal-crear-cod_barra" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">CREAR CÓDIGO DE BARRA</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-dismiss="modal">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col">
                                <div class="col-md-12 form-group">
                                    <label>CÓDIGO BARRA</label>
                                    <input type="text"  class="form-control"  value="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>UNIDAD DE MEDIDA</label>
                                    <input type="text"  class="form-control"  value="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>ARTÍCULO</label>
                                    <input type="text"  class="form-control"  value="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text"  class="form-control"  value="ARTICULO SELECIONADO" disabled>
                                </div>
                        </div>
                        <div class="col">
                            <div class="col-md-12 form-group">
                                <label>UNIDAD POR PAQUETE</label>
                                <input type="text"  class="form-control"  value="">
                            </div>

                            <div class="col-md-12 form-group">
                                <label>PRESO BRUTO GRAMO</label>
                                <input type="text"  class="form-control" value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>TIPO BARRA</label>
                               <select class="form-control">
                                   <option>OPCION 1</option>
                                   <option>OPCION 2</option>
                                   <option>OPCION 3</option>
                               </select>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center text-primary font-weight-bold">CÓDIGO USADOS PARA :</h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Compra
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Pedido
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Recepción
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Despacho
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


