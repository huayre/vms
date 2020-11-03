@extends('template.index')

@section('header_content')
    @include('porteria::mantencion_transporte.modal_agregar')
    @include('porteria::mantencion_transporte.modal_editar')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Porteria</a></li>
                <li class="breadcrumb-item active">Ingresar Transportista</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">CREAR NUEVO TRANSPORTISTA</h3>
                </div>
                <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>CÓDIGO</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>NOMBRE</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>FONO</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 align-self-end text-right">
                        <button type="button" class="btn btn-default"> <i class="fas fa-times-circle"></i> Limpiar</button>
                        <button type="button" class="btn btn-success"> <i class="fas fa-save"></i> Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
