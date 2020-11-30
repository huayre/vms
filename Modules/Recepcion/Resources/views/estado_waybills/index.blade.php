@extends('template.index')

@section('header_content')
    @include('recepcionarticulos::carga_transporte.modal_detalle')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Recepción</a></li>
                <li class="breadcrumb-item active">Estado Waybills</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">BUSCAR WAYBILLS</h3>
                </div>
                <div class="card-body">
                    <form  method="post">
                        @csrf
                        <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="nombreROL">Bodega</label>
                                    <select class="form-control">
                                        <option>Opcion1</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="nombreROL">Num. Orden de Compra</label>
                                    <input type="text" placeholder="Descripción del transporte" class="form-control form-control-sm"/>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="nombreROL">Num. Waybills</label>
                                    <input type="date" placeholder="Descripción del transporte" class="form-control form-control-sm"/>
                                </div>


                        </div>
                                <div class="col-md-12 float-right ">
                                    <button type="button" class="btn btn-sm btn-info" id="buscarROL"><i class="fas fa-search"></i> Buscar</button>
                                    <button type="button" class="btn btn-sm btn-success" id="buscarROL"><i class="fas fa-print"></i> Imprimir</button>

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
                    <h3 class="card-title">WAYBILLS CARGADOS</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered text-sm" id="table-rol">
                        <thead>
                        <tr class="text-md-left text-lg-center">
                            <th>Estado</th>
                            <th>Documento</th>
                            <th>Item Documento</th>
                            <th>Num. Waybills</th>
                            <th>Cod Artículo</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
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
