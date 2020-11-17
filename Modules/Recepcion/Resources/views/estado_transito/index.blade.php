@extends('template.index')

@section('header_content')
    @include('recepcion::estado_transito.modal_detalle')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Recepción</a></li>
                <li class="breadcrumb-item active">Estado en Transito</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Buscar Stock en Transito de Recepción</h3>
                </div>
                <div class="card-body">
                    <form  method="post">
                        @csrf
                        <div class="row">
                                <div class="col-md-3 form-group">
                                    <label for="nombreROL">Bodega Destino</label>
                                    <select class="form-control">
                                        <option>Opcion1</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="nombreROL">Num. Doct. Recepción</label>
                                    <input type="text" placeholder="Descripción del transporte" class="form-control form-control-sm"/>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="nombreROL">Artículo</label>
                                    <select class="form-control">
                                        <option>Opcion1</option>
                                    </select>
                                </div>
                            <div class="col-md-3 form-group">
                                <label for="nombreROL">No Catalogado</label>
                                <input type="checkbox">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="nombreROL">Recepción Desde:</label>
                                <input type="date"  class="form-control form-control-sm"/>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="nombreROL">Fecha Recepción Hasta:</label>
                                <input type="date"  class="form-control form-control-sm"/>
                            </div>

                        </div>
                                <div class="col-md-12 float-right ">
                                    <button type="button" class="btn btn-sm btn-info" id="buscarROL"><i class="fas fa-search"></i> Buscar</button>
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
                    <h3 class="card-title">ARTICULOS EN TRANSITO</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered text-sm" id="table-rol">
                        <thead>
                        <tr class="text-md-left text-lg-center">
                            <th>Nro. Bulto</th>
                            <th>Código de Transporte</th>
                            <th>Documento de Transporte</th>
                            <th>Transportista</th>
                            <th>Bodega Destino</th>
                            <th>Fecha Carga</th>
                            <th>Detalle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                            </td>
                            <td>
                                095495495
                            </td>
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
