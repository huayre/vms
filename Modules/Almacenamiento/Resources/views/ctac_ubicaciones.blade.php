@extends('template.index')

@section('header_content')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark"></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
        <li class="breadcrumb-item active">Cuenta corriente por ubicaciones</li>
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
          <form action="" id="formCTAU" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaCTAU">Bodega</label>
                <select id="bodegaCTAU" name="bodegaCTAU" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="ubicacionCTAU">Ubicación</label>
								<input type="text" id="ubicacionCTAU" name="ubicacionCTAU" class="form-control form-control-sm" value="" placeholder="Ubicación"/>
              </div>
              <div class="col-md-3 form-group">
                <label for="fechaIniCTAU">Mov. inicio</label>
                <input type="date" id="fechaIniCTAU" name="fechaIniCTAU" class="form-control form-control-sm" value="">
              </div>
              <div class="col-md-3 form-group">
                <label for="fechaFinCTAU">Mov. término</label>
                <input type="date" id="fechaFinCTAU" name="fechaFinCTAU" class="form-control form-control-sm" value="">
              </div>
              <div class="col-md-2 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarCTAU"> <i class="fas fa-search"></i> Buscar</button>
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
          <table class="table table-striped table-bordered" id="dtResultCTAU">
            <thead>
              <tr>
                <th data-orderable="true">COD. ARTÍCULO</th>
                <th data-orderable="true">NOMBRE ARTÍCULO</th>
                <th data-orderable="true">CANT. ORIG.</th>
                <th data-orderable="true">ENTRAN</th>
                <th data-orderable="true">SALEN</th>
                <th data-orderable="true">SALDO</th>
                <th data-orderable="true">TIPO MOV.</th>
                <th data-orderable="true">DOC REFER.</th>
                <th data-orderable="true">FECHA</th>
                <th data-orderable="true">OPERADOR</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>COD. ARTÍCULO</td>
                <td>NOMBRE ARTÍCULO</td>
                <td>CANT. ORIG.</td>
                <td>ENTRAN</td>
                <td>SALEN</td>
                <td>SALDO</td>
                <td>TIPO MOV.</td>
                <td>DOC REFER.</td>
                <td>FECHA</td>
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
