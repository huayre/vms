<div id="modal-asignar-documentos" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form  method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">SELECCIONAR DOCUMENTOS</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-dismiss="modal">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    @csrf
                    <table class="table table-sm w-100">
                       <thead class="table-info">
                       <tr>
                           <th>Seleccionar</th>
                           <th>Estado</th>
                           <th>Número de sección</th>
                           <th>Típo de documento</th>
                           <th>Bodega orígen</th>
                       </tr>
                       </thead>
                        <tbody>
                            <td>
                                <input  type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"> <i class="fas fa-times-circle"></i> Limpiar</button>
                    <button type="button" class="btn btn-success"> <i class="fas fa-save"></i> ASIGNAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

