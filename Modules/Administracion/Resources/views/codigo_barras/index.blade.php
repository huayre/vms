@extends('template.index')

@section('header_content')
    @include('administracion::codigo_barras.modal_agregar')
    @include('administracion::codigo_barras.modal_editar')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Administracion</a></li>
                <li class="breadcrumb-item active">Mantención de Maestros</li>
                <li class="breadcrumb-item active">Códigos de Barra</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">BUSCAR ARTÍCULOS</h3>
                </div>
                <div class="card-body">
                    <form  method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="nombreROL">DESCRIPCIÓN</label>
                                <input type="text" placeholder="Descripción del Artículo" class="form-control form-control-sm"/>
                            </div>
                            <div class="col-md-8 form-group align-self-end">
                                <button type="button" class="btn btn-sm btn-info" id="buscarROL"><i class="fas fa-search"></i> Buscar</button>
                                <button type="button" class="btn btn-sm btn-default" id="limpiarROL"><i class="fas fa-trash"></i> Limpiar</button>
                                <button type="button" class="btn btn-sm btn-success" id="nuevo" data-toggle='modal' data-target='#modal-crear-cod_barra'><i class="fas fa-plus"></i> Nuevo</button>
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
                            <th>DETALLE ARTÍCULO</th>
                            <th>ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ARTÍCULO 1203004 03FK405</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info mt-1" id="editar" data-toggle='modal' data-target='#modal-editar-cod_barra'><i class="fas fa-edit"></i> Editar</button>
                                <button  class="btn btn-sm btn-danger" onclick="AlertaEliminar()"><i class="fas fa-times-circle"></i> Eliminar</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function AlertaEliminar()
        {
            Swal.fire({
                title: 'Estas segúro de eliminar ?',
                text: "No volveras a usar este Código de Barras!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Borralo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Eliminado!',
                        'El Código de Barras fue eliminado correctamente.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
