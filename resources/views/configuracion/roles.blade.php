@extends('../template/index')

@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Administracion</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
            <li class="breadcrumb-item active">Roles</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">BUSCAR ROLES</h3>
                </div>
                <div class="card-body">
                    <form id="formROL" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="nombreROL">DESCRIPCIÓN</label>
                                <input type="text" name="nombreROL" id="nombreROL" value="" placeholder="Descripción del rol" class="form-control form-control-sm"/>
                            </div>
                            <div class="col-md-8 form-group align-self-end">
                                <button type="button" class="btn btn-sm btn-info" id="buscarROL"><i class="fas fa-search"></i> Buscar</button>
                                <button type="button" class="btn btn-sm btn-default" id="limpiarROL"><i class="fas fa-trash"></i> Limpiar</button>
                                <button type="button" class="btn btn-sm btn-success" id="nuevo" data-toggle='modal' data-target='#modalROL'><i class="fas fa-plus"></i> Nuevo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">RESULTADOS</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered text-sm" id="table-rol">
                        <thead>
                            <tr class="text-md-left text-lg-center">
                                <th style="width: 70%">DESCRIPCIÓN</th>
                                <th style="width: 30%">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ADMINISTRADOR</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info mt-1"><i class="fas fa-edit"></i> Editar</button>
                                    <button type="button" class="btn btn-sm btn-danger mt-1"><i class="fas fa-times-circle"></i> Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="modalROL" class="modal fade">
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
@endsection
