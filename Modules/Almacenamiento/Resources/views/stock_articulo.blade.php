@extends('template.index')

@section('header_content')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark"></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
        <li class="breadcrumb-item active">Stock por articulo</li>
      </ol>
    </div>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">FILTRAR</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body text-sm">
          <form action="" id="formSTA" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaSTA">Bodega</label>
                <select id="bodegaSTA" name="bodegaSTA" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="skuSTA">Artículo</label>
                <input type="text" id="skuSTA" name="skuSTA" class="form-control form-control-sm" value="" placeholder="Código">
              </div>
              <div class="col-md-3 form-group align-self-end">
                <input type="text" id="nombreSTA" name="nombreSTA" class="form-control form-control-sm" value="" placeholder="Nombre del artículo" readonly>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <input type="checkbox" id="catalogadoSTA" name="catalogadoSTA" class="form-checkbox" value="1">
                <label for="catalogadoSTA">No catalogado</label>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <label for="printUbicSTA">Con ubicación</label>
                <select id="printUbicSTA" name="printUbicSTA" class="form-control form-control-sm">
                  <option value="0">NO</option>
                  <option value="1">SI</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarSTA"> <i class="fas fa-search"></i> Buscar</button>
                <button type="button" class="btn btn-secondary" id="imprimirSTA"> <i class="fas fa-print"></i>
                  Imprimir</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">RESULTADOS</h3>
        </div>
        <div class="card-body text-sm" style="overflow-y: auto">
          <table class="table table-striped table-bordered" id="dtResultStock">
            <thead>
              <tr>
                <th style="width:15%" data-orderable="true">BODEGA</th>
                <th style="width:15%" data-orderable="true">COD. ARTÍCULO</th>
                <th style="width:40%" data-orderable="true">NOMBRE STAICULO</th>
                <th style="width:15%" data-orderable="true">UNI. MEDIDA</th>
                <th style="width:15%" data-orderable="true">STOCK</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BODEGA</td>
                <td>COD. ARTÍCULO</td>
                <td>NOMBRE STAICULO</td>
                <td>UNI. MEDIDA</td>
                <td>STOCK</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script src="{{ Module::asset('almacenaje:js/app.js') }}"></script>
@endsection
