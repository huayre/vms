@extends('../template/index')

@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Etiquetas</a></li>
            <li class="breadcrumb-item active">Bultos</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Bultos</h3>
                </div>
                <div class="card-body">
                    <form action="" id="formBT" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="numeroBT">Número Inicial</label>
                                <input type="text" id="numeroBT" name="numeroBT" value="" class="form-control form-control-sm" placeholder="Número inicial"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="cantidadBT">Cantidad</label>
                                <input type="text" id="cantidadBT" name="cantidadBT" value="" class="form-control form-control-sm" placeholder="Cantidad"/>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-auto form-group">
                                <button type="button" class="btn btn-default" id="limpiarBT"> <i class="fas fa-trash"></i> Limpiar </button>
                                <button type="button" class="btn btn-success" id="pdfBT"> <i class="far fa-file-pdf"></i> Pdf</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
