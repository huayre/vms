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
          <form action="" id="formSTG" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaSTG">Bodega</label>
                <select id="bodegaSTG" name="bodegaSTG" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="skuSTG">Artículo</label>
                <input type="text" id="skuSTG" name="skuSTG" class="form-control form-control-sm" value="" placeholder="Código">
              </div>
              <div class="col-md-4 form-group align-self-end">
                <input type="text" id="nombreSTG" name="nombreSTG" class="form-control form-control-sm" value="" placeholder="Nombre del artículo" readonly>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <input type="checkbox" id="catalogadoSTG" name="catalogadoSTG" class="form-checkbox" value="1">
                <label for="catalogadoSTG">No catalogado</label>
              </div>
              <div class="col-md-2 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarSTG"> <i class="fas fa-search"></i> Buscar</button>
                <button type="button" class="btn btn-secondary" id="imprimirSTG"> <i class="fas fa-print"></i>
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
          <table class="table table-striped table-bordered" id="dtResultStockGeneral">
            <thead>
              <tr>
                <th data-orderable="true">BODEGA</th>
                <th data-orderable="true">COD. ARTÍCULO</th>
                <th data-orderable="true">NOMBRE ARTICULO</th>
                <th data-orderable="true">UNI. MEDIDA</th>
                <th data-orderable="true">TRANSITO RECEP.</th>
                <th data-orderable="true">DESPACHO</th>
                <th data-orderable="true">REUBIC. PROPIO</th>
                <th data-orderable="true">REUBIC. CONSIG.</th>
                <th data-orderable="true">CONSIGNACIÓN</th>
                <th data-orderable="true">PROPIO</th>
                <th data-orderable="true">TOTAL</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BODEGA</td>
                <td>COD. ARTÍCULO</td>
                <td>NOMBRE ARTICULO</td>
                <td>UNI. MEDIDA</td>
                <td>TRANSITO RECEP.</td>
                <td>DESPACHO</td>
                <td>REUBIC. PROPIO</td>
                <td>REUBIC. CONSIG.</td>
                <td>CONSIGNACIÓN</td>
                <td>PROPIO</td>
                <td>TOTAL</td>
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
