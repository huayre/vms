<div id="modal-eliminar-rol" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el ROL?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formRL" method="POST">
                 <div class="modal-body text-center text-uppercase font-weight-bold">

                    <form action="">
                        @method('delete')
                        @csrf
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Eliminar</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>
