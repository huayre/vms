@extends('../template/index')

@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Etiquetas</a></li>
            <li class="breadcrumb-item active">Ubicaciones</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Ubicación</h3>
                </div>
                <div class="card-body">
                    <form action="" id="formUB" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="bodegaBT">Bodega</label>
                                <select id="bodegaUB" name="bodegaUB" class="form-control form-control-sm">
                                <option value=""> :: SELECCIONE :: </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="hileraUB">Hilera</label>
                                <select id="hileraUB" name="hileraUB" class="form-control form-control-sm">
                                <option value=""> :: SELECCIONE :: </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="columnaUB">Columna</label>
                                <select id="columnaUB" name="columnaUB" class="form-control form-control-sm">
                                <option value=""> :: SELECCIONE :: </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="nivelUB">Nivel</label>
                                <select id="nivelUB" name="nivelUB" class="form-control form-control-sm">
                                <option value=""> :: SELECCIONE :: </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="tipoAlmacenUB">Tipo de almacen</label>
                                <select id="tipoAlmacenUB" name="tipoAlmacenUB" class="form-control form-control-sm">
                                <option value=""> :: SELECCIONE :: </option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-auto form-group align-self-end">
                                <button type="button" class="btn btn-default" id="limpiarUB"> <i class="fas fa-trash"></i> Limpiar</button>
                                <button type="button" class="btn btn-success" id="pdfUB"> <i class="far fa-file-pdf"></i> Pdf</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
