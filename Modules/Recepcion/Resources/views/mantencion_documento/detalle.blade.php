@extends('template.index')

@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Recepción</a></li>
                <li class="breadcrumb-item active">Detalle de Recepción</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">DETALLE DE RECEPCIÓN</h3>
                </div>
                <div class="card-body">
                    <h6>Número de Recepción: <strong class="text-primary">0948589</strong></h6>
                    <h6>Número de Documento :<strong class="text-primary">UGK589</strong></h6>
                    <button type="button" class="btn btn-sm btn-success" id="nuevo" data-toggle='modal' data-target='#modal-crear'><i class="fas fa-plus"></i> Nuevo</button>
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
                            <th>DESCRIPCION</th>
                            <th>CONTROL DE ACCESO</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>J00203944</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info mt-1" id="editar" data-toggle='modal' data-target='#modal-editar'><i class="fas fa-edit"></i> Editar</button>
                                <button  class="btn btn-sm btn-danger" onclick="AlertaEliminar()"><i class="fas fa-times-circle"></i> Eliminar</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="float-right">
        <a href="{{route('mantencion_documento')}}" class="btn btn-info"> Regresar A la Lista</a>
    </div>
@endsection
@section('script')
    <script>
        function AlertaEliminar()
        {
            Swal.fire({
                title: 'Estas segúro de eliminar ?',
                text: "No volveras a usar este Detalle !",
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
                        'El detalle de la recepción fue eliminado correctamente.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
