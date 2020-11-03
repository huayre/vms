@extends('template.index')
@section('header_content')
    @include('porteria::impri_document_transporte.detalle')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Porteria</a></li>
                <li class="breadcrumb-item active">Imprimir Documento Transporte</li>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bodega Destino</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nro. Doct. Transporte</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Patente</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Desde</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>hasta</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col form-group align-self-end">
                                <button type="button" class="btn btn-sm btn-primary" id="nuevo" data-toggle='modal' data-target='#modal-ingresar'><i class="fas fa-search"></i> BUSCAR</button>
                                <button type="button" class="btn btn-sm btn-success" id="nuevo" data-toggle='modal' data-target='#modal-salida'><i class="fas fa-plus"></i> IMPRIMIR</button>
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
                            <th>DOCUMENTO</th>
                            <th>PATENTE</th>
                            <th>TIPO VEHICULO</th>
                            <th>CODIGO TRANSPORTE</th>
                            <th>NOMBRE TRANSPORTISTA</th>
                            <th>FECHA CARGA</th>
                            <th>BODEGA DESTINO</th>
                            <th>DETALLE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info mt-1" id="editar" data-toggle='modal' data-target='#modal-ver-detalle'><i class="fas fa-search"></i> VER DETALLE</button>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
