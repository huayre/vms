@extends('template.index')

@section('header_content')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark"></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
        <li class="breadcrumb-item active">Movimiento mensual de unidades</li>
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
          <form action="" id="formMMU" method="post">
            @csrf
            <div class="row">
              <div class="col-md-2 form-group">
                <label for="bodegaMMU">Bodega</label>
                <select id="bodegaMMU" name="bodegaMMU" class="form-control form-control-sm">
                  <option value="">::SELECCIONE::</option>
                  @forelse ($bodega as $key => $val)
                    <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                  @empty
                    <option value="">:: Sin datos ::</option>
                  @endforelse
                </select>
              </div>
              <div class="col-md-2 form-group">
                <label for="skuMMU">Artículo</label>
                <input type="text" id="skuMMU" name="skuMMU" class="form-control form-control-sm" value=''
                  placeholder='Código'>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <input type="text" id="nombreMMU" name="nombreMMU" class="form-control form-control-sm" value=''
                  placeholder='Nombre de artículo' readonly>
              </div>
              <div class="col-md-2 form-group align-self-end">
                <input type="checkbox" id="catalogadoMMU" name="catalogadoCTAA" class="form-checkbox" value="1">
                <label for="catalogadoMMU">No catalogado</label>
              </div>
              <div class="col-md-2 form-group">
                <label for="iniMesMMU">Periodo Inicio</label>
                <div class="input-group">
                  <select id="iniMesMMU" name="iniMesMMU" class="form-control form-control-sm">
                    <option value="">MES</option>
                    @forelse ($meses as $key => $val)
                      <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                    @empty
                      <option value="">:: Sin datos ::</option>
                    @endforelse
                  </select>
                  <select id="iniAnioMMU" name="iniAnioMMU" class="form-control form-control-sm">
                    <option value="">AÑO</option>
                    @forelse ($anio as $key => $val)
                      <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                    @empty
                      <option value="">:: Sin datos ::</option>
                    @endforelse
                  </select>
                </div>
              </div>
              <div class="col-md-2 form-group">
                <label for="finMesMMU">Periodo término</label>
                <div class="input-group">
                  <select id="finMesMMU" name="finMesMMU" class="form-control form-control-sm">
                    <option value="">MES</option>
                    @forelse ($meses as $key => $val)
                      <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                    @empty
                      <option value="">:: Sin datos ::</option>
                    @endforelse
                  </select>
                  <select id="finAnioMMU" name="finAnioMMU" class="form-control form-control-sm">
                    <option value="">AÑO</option>
                    @forelse ($anio as $key => $val)
                      <option value="{{ $val->id }}">{{ $val->descripcion }}</option>
                    @empty
                      <option value="">:: Sin datos ::</option>
                    @endforelse
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group align-self-end text-right">
                <button type="button" class="btn btn-info" id="buscarMMU"> <i class="fas fa-search"></i> Buscar</button>
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
                <th>PERIODO</th>
                <th>SALDO INICIAL</th>
                <th>ENTRADAS</th>
                <th>SALIDAS</th>
                <th>STOCK FINAL</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PERIODO</td>
                <td>SALDO INICIAL</td>
                <td>ENTRADAS</td>
                <td>SALIDAS</td>
                <td>STOCK FINAL</td>
              </tr>
            </tbody>
						<tfoot>
              <tr>
                <td>TOTAL</td>
                <td>SALDO INICIAL</td>
                <td>ENTRADAS</td>
                <td>SALIDAS</td>
                <td>STOCK FINAL</td>
              </tr>
						</tfoot>
          </table>
        </div>
				<div class="card-footer text-sm">
					<div class="row">
						<div class="col-md-4">
							<p>Saldo promedio inventario: <span id="resultSP"></span> </p>
						</div>
						<div class="col-md-4">
							<p>Consumo promedio: <span id="resultCP"></span> </p>
						</div>
						<div class="col-md-4">
							<p>Cobertura: <span id="resultCB"></span> </p>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>

  <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title">Grafico</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="chart">
        <div class="chartjs-size-monitor">
          <div class="chartjs-size-monitor-expand">
            <div class=""></div>
          </div>
          <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
          </div>
        </div>
        <canvas id="areaChart"
          style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 644px;"
          width="644" height="250" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ Module::asset('almacenamiento:js/movimiento_mensual.js') }}"></script>
@endsection
