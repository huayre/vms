@extends('template.index')

@section('header_content')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark"></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
        <li class="breadcrumb-item active">Cuenta corriente por artículo</li>
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
          <form action="" id="formCTAA" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaCTAA">Bodega</label>
                <select id="bodegaCTAA" name="bodegaCTAA" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="skuCTAA">Artículo</label>
								<input type="text" id="skuCTAA" name="skuCTAA" class="form-control form-control-sm" value="" placeholder="Código"/>
              </div>
              <div class="col-md-2 form-group align-self-end">
								<input type="text" id="nombreCTAA" name="nombreCTAA" class="form-control form-control-sm" value="" placeholder="Nombre de artículo" readonly/>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <input type="checkbox" id="catalogadoCTAA" name="catalogadoCTAA" class="form-checkbox" value="1">
                <label for="catalogadoCTAA">No catalogado</label>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <label for="fechaIniCTAA">Mov. inicio</label>
                <input type="date" id="fechaIniCTAA" name="fechaIniCTAA" class="form-control form-control-sm" value="">
              </div>
              <div class="col-md-2 form-group align-self-end">
                <label for="fechaFinCTAA">Mov. término</label>
                <input type="date" id="fechaFinCTAA" name="fechaFinCTAA" class="form-control form-control-sm" value="">
              </div>
						</div>
						<div class="row">
              <div class="col-md-12 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarCTAA"> <i class="fas fa-search"></i> Buscar</button>
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
          <table class="table table-striped table-bordered" id="dtResultCTAA">
            <thead>
              <tr>
                <th data-orderable="true">BODEGA</th>
                <th data-orderable="true">COD. UBICACIÓN</th>
                <th data-orderable="true">CANT. ORIGEN</th>
                <th data-orderable="true">ENTRAN</th>
                <th data-orderable="true">SALEN</th>
                <th data-orderable="true">SALDO</th>
                <th data-orderable="true">N. DOCTO</th>
                <th data-orderable="true">FECHA MOVIMIENTO</th>
                <th data-orderable="true">OPERADOR</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BODEGA</td>
                <td>COD. UBICACIÓN</td>
                <td>CANT. ORIGEN</td>
                <td>ENTRAN</td>
                <td>SALEN</td>
                <td>SALDO</td>
                <td>N. DOCTO</td>
                <td>FECHA MOVIMIENTO</td>
                <td>OPERADOR</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script src="{{ Module::asset('almacenamiento:js/app.js') }}"></script>
@endsection
