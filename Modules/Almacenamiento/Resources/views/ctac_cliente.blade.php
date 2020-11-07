@extends('template.index')

@section('header_content')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark"></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
        <li class="breadcrumb-item active">Cuenta corriente por cliente</li>
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
          <form action="" id="formCTAC" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaCTAC">Bodega</label>
                <select id="bodegaCTAC" name="bodegaCTAC" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="clienteCTAC">Cliente</label>
								<input type="text" id="clienteCTAC" name="clienteCTAC" class="form-control form-control-sm" value="" placeholder="Cliente"/>
              </div>
              <div class="col-md-2 form-group align-self-end">
								<input type="text" id="nombreCTAC" name="nombreCTAC" class="form-control form-control-sm" value="" placeholder="Nombre del cliente"/>
              </div>
              <div class="col-md-3 form-group">
                <label for="fechaIniCTAC">Mov. inicio</label>
                <input type="date" id="fechaIniCTAC" name="fechaIniCTAC" class="form-control form-control-sm" value="">
              </div>
              <div class="col-md-3 form-group">
                <label for="fechaFinCTAC">Mov. término</label>
                <input type="date" id="fechaFinCTAC" name="fechaFinCTAC" class="form-control form-control-sm" value="">
              </div>
						</div>
						<div class="row">
              <div class="col-md-12 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarCTAC"> <i class="fas fa-search"></i> Buscar</button>
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
          <table class="table table-striped table-bordered" id="dtResultCTAC">
            <thead>
              <tr>
                <th data-orderable="true">BODEGA</th>
                <th data-orderable="true">COD. UBICACIÓN</th>
                <th data-orderable="true">CANT. ORIG.</th>
                <th data-orderable="true">ENTRAN</th>
                <th data-orderable="true">SALEN</th>
                <th data-orderable="true">SALDO</th>
                <th data-orderable="true">TIPO DOCTO.</th>
                <th data-orderable="true">DOC REFER.</th>
                <th data-orderable="true">FECHA</th>
                <th data-orderable="true">OPERADOR</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BODEGA</td>
                <td>COD. UBICACIÓN</td>
                <td>CANT. ORIG.</td>
                <td>ENTRAN</td>
                <td>SALEN</td>
                <td>SALDO</td>
                <td>TIPO DOCTO.</td>
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
