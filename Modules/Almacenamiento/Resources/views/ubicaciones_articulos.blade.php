@extends('template.index')

@section('header_content')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark"></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
        <li class="breadcrumb-item active">Ubicaciones por artículo</li>
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
          <form action="" id="formUBA" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaUBA">Bodega</label>
                <select id="bodegaUBA" name="bodegaUBA" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="skuUBA">ARTÍCULO</label>
								<input type="text" id="skuUBA" name="skuUBA" class="form-control form-control-sm" value="" placeholder="Código"/>
              </div>
              <div class="col-md-2 form-group align-self-end">
								<input type="text" id="nombreUBA" name="nombreUBA" class="form-control form-control-sm" value="" placeholder="Nombre de artículo" readonly/>
              </div>
              <div class="col-md-2 form-group">
                <label for="claseUBA">Clase</label>
                <select id="claseUBA" name="claseUBA" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($clase as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="inactividadUBA">Inactividad</label>
                <select id="inactividadUBA" name="inactividadUBA" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($inactividad as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <input type="checkbox" id="catalogadoUBA" name="catalogadoUBA" class="form-checkbox" value="1">
                <label for="catalogadoUBA">No catalogado</label>
              </div>
						</div>
						<div class="row">
              <div class="col-md-12 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarUBA"> <i class="fas fa-search"></i> Buscar</button>
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
          <table class="table table-striped table-bordered" id="dtResultUBA">
            <thead>
              <tr>
                <th data-orderable="true">COD. ARTÍCULO</th>
                <th data-orderable="true">NOMBRE ARTÍCULO</th>
                <th data-orderable="true">CLASE</th>
                <th data-orderable="true">CLASIFICACIÓN</th>
                <th data-orderable="true">INACTIVIDAD</th>
                <th data-orderable="true">BODEGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>COD. ARTÍCULO</td>
                <td>NOMBRE ARTÍCULO</td>
                <td>CLASE</td>
                <td>CLASIFICACIÓN</td>
                <td>INACTIVIDAD</td>
                <td>BODEGA</td>
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
