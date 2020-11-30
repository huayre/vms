@extends('template.index')

@section('header_content')
    @include('recepcionarticulos::dife_ingreso_recepción.modal_detalle')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Recepción</a></li>
                <li class="breadcrumb-item active">Diferencia Ingreso && Recepción</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Buscar Diferencia Ingreso && Recepción</h3>
                </div>
                <div class="card-body">
                    <form  method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="nombreROL">DESCRIPCIÓN</label>
                                <input type="text" placeholder="Descripción del transporte" class="form-control form-control-sm"/>
                            </div>
                            <div class="col-md-8 form-group align-self-end">
                                <button type="button" class="btn btn-sm btn-info" id="buscarROL"><i class="fas fa-search"></i> Buscar</button>
                                <button type="reset" class="btn btn-sm btn-default" id="limpiarROL"><i class="fas fa-trash"></i> Limpiar</button>
                                <button type="button" class="btn btn-sm btn-success" id="buscarROL"><i class="fas fa-print"></i> Imprimir</button>

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
                    <h3 class="card-title">BULTOS CARGADOS</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered text-sm" id="table-rol">
                        <thead>
                        <tr class="text-md-left text-lg-center">
                            <th></th>
                            <th>Tipo Documento</th>
                            <th>Estado</th>
                            <th>Num Recepción</th>
                            <th>Doc. Recepción</th>
                            <th>Recibido</th>
                            <th>Guia Factura</th>
                            <th>Proveedor</th>
                            <th>Operador</th>
                            <th>Transportista</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                095495495
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info mt-1" id="editar" data-toggle='modal' data-target='#modal-detalles'><i class="fas fa-search"></i> Detalles</button>
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
                text: "No volveras a usar esta Recepción !",
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
                        'La Recepción fue eliminado correctamente.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
