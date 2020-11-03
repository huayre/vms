@extends('template.index')

@section('header_content')
    @include('porteria::entrada_salida.modal_ingresar')
    @include('porteria::entrada_salida.modal_salida')
    @include('porteria::entrada_salida.lista_documentos')
    @include('porteria::entrada_salida.ver_documentos')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Porteria</a></li>
                <li class="breadcrumb-item active">Control de entrada y salida</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">OPERACIONES</h3>
                </div>
                <div class="card-body">
                    <form  method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 form-group align-self-end">
                                <button type="button" class="btn btn-sm btn-primary" id="nuevo" data-toggle='modal' data-target='#modal-ingresar'><i class="fas fa-plus"></i> INGRESAR</button>
                                <button type="button" class="btn btn-sm btn-success" id="nuevo" data-toggle='modal' data-target='#modal-salida'><i class="fas fa-plus"></i> DESPACHAR</button>
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
                            <th>PLACA</th>
                            <th>TIPO DE VEHICULO</th>
                            <th>FECHA</th>
                            <th>HORA</th>
                            <th>SENTIDO</th>
                            <th>CARGA</th>
                            <th>PORTERO</th>
                            <th>CHOFER</th>
                            <th>CONTROL DE ACCESO</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>DATOS</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info mt-1" id="editar" data-toggle='modal' data-target='#modal-asignar-documentos'><i class="fas fa-edit"></i>ASIGNAR DOCUMENTOS</button>
                                <button type="button" class="btn btn-sm btn-warning mt-1" id="editar" data-toggle='modal' data-target='#modal-ver-documentos'><i class="fas fa-edit"></i>VER  DOCUMENTOS </button>
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
