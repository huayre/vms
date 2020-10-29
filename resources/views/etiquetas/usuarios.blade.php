@extends('../template/index')

@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Etiquetas</a></li>
            <li class="breadcrumb-item active">Etiquetas</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Usuarios - Operadores</h3>
                </div>
                <div class="card-body">
                    <form action="" id="formUS" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Operador</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <input type="checkbox" id="numeroUS" name="numeroUS[]" value="" class="form-checkbox"/>&nbsp;
                                    <label for="numeroUS">Código Operador</label>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-auto form-group">
                                <button type="button" class="btn btn-default" id="limpiarUS"> <i class="fas fa-trash"></i> Limpiar </button>
                                <button type="button" class="btn btn-success" id="pdfUS"> <i class="far fa-file-pdf"></i> Pdf</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection