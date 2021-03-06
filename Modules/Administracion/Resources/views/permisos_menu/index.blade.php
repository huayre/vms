@extends('template.index')

@section('header_content')
    @include('administracion::permisos_menu.modal_modal-administrar_permisos_menu')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Administracion</a></li>
                <li class="breadcrumb-item active">Usuarios</li>
                <li class="breadcrumb-item active">Permisos Menú</li>
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
                                <button type="button" class="btn btn-sm btn-info mt-1" id="editar" data-toggle='modal' data-target='#modal-administrar_menu'><i class="fas fa-edit"></i> Administrar Roles</button>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
