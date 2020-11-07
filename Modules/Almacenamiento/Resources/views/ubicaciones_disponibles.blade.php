@extends('template.index')

@section('header_content')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark"></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
        <li class="breadcrumb-item active">Ubicaciones disponibles</li>
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
          <form action="" id="formUBD" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaUBD">Bodega</label>
                <select id="bodegaUBD" name="bodegaUBD" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="zonaUBD">Zona</label>
                <select id="zonaUBD" name="zonaUBD" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($zona as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="hileraUBD">Hilera</label>
                <select id="hileraUBD" name="hileraUBD" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($hilera as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="nivelUBD">Nivel</label>
                <select id="nivelUBD" name="nivelUBD" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($nivel as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-4 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarUBD"> <i class="fas fa-search"></i> Buscar</button>
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
          <table class="table table-striped table-bordered" id="dtResultUBD">
            <thead>
              <tr>
                <th data-orderable="true">BODEGA</th>
                <th data-orderable="true">UBICACIÓN</th>
                <th data-orderable="true">HILERA</th>
                <th data-orderable="true">COLUMNA</th>
                <th data-orderable="true">NIVEL</th>
                <th data-orderable="true">ZONA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BODEGA</td>
                <td>UBICACIÓN</td>
                <td>HILERA</td>
                <td>COLUMNA</td>
                <td>NIVEL</td>
                <td>ZONA</td>
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
