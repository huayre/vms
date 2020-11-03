@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Inventario</a></li>
			<li class="breadcrumb-item active">Toma de inventario</li>
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
				<form action="" id="formCTI" method="post">
					@csrf
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="bodegaCTI">Bodega</label>
							<select id="bodegaCTI" name="bodegaCTI" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-3 form-group">
							<label for="codigoInvCTI">Número inventario</label>
							<input type="text" id="codigoInvCTI" name="codigoInvCTI" value="" class="form-control form-control-sm" placeholder="Número de inventario" readonly/>
						</div>
						<div class="col-md-6 form-group align-self-end">
							<button type="button" class="btn btn-info" id="actualizarCTI"> <i class="fas fa-sync-alt"></i> Actualizar</button>
							<button type="button" class="btn btn-success" id="nuevoCTI"> <i class="fas fa-plus"></i> Nuevo</button>
							<button type="button" class="btn btn-secondary" id="imprimirCTI"> <i class="fas fa-print"></i> Imprimir</button>
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
				<table class="table table-striped table-bordered" id="dtResultIndex">
					<thead>
						<tr>
							<th style="width:10%" data-orderable="true">COD. ARTÍCULO</th>
							<th style="width:30%" data-orderable="true">NOMBRE</th>
							<th style="width:15%" data-orderable="true">CANTIDAD</th>
							<th style="width:15%" data-orderable="true">UBICACIÓN</th>
							<th style="width:15%" data-orderable="true">OPERADOR</th>
							<th style="width:15%" data-orderable="true">FECHA INGRESO</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>COD. ARTÍCULO</td>
							<td>NOMBRE</td>
							<td>CANTIDAD</td>
							<td>UBICACIÓN</td>
							<td>OPERADOR</td>
							<td>FECHA INGRESO</td>
						</tr>
					</tbody>
				</table>
	    </div>
	  </div>
	</div>
</div>

<div id="modalTI" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="formTI" action="" method="POST">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">DETALLES TOMA DE INVENTARIO</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="bodegaTI">Bodega</label>
							<select id="bodegaTI" name="bodegaTI" class="form-control form-control-sm">
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-6 form-group">
							<label for="fechaCreacionTI">FECHA DE CREACIÓN:</label>
							<input type="date" id="fechaCreacionTI" name="fechaCreacionTI" class="form-control form-control-sm" value="{{date('Y-m-d')}}" readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="numeroTI">NÚMERO DE TOMA:</label>
							<input type="text" id="numeroTI" name="numeroTI" class="form-control form-control-sm" value="{{date('m')}}{{date('s')}}" readonly>
						</div>
						<div class="col-md-6 form-group">
							<label for="responsableTI">RESPONSABLE</label>
							<select id="responsableTI" name="responsableTI" class="form-control form-control-sm">
								@forelse ($responsables as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="descripcionTI">DESCRIPCIÓN</label>
							<input type="text" id="descripcionTI" name="descripcionTI" class="form-control form-control-sm" value="">
						</div>
					</div>
					<div class="row border">
						<div class="col-md-12 form-group">
							<label for="tipoInvTI">TIPO DE INVENTARIO</label>
							<select id="tipoInvTI" name="tipoInvTI" class="form-control form-control-sm">
								<option value="1">General</option>
								<option value="2">Ubicaciones</option>
								<option value="3">Guiado</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="skuTI">CÓDIGO ARTÍCULO:</label>
							<input type="text" id="skuTI" name="skuTI" class="form-control form-control-sm" value="" placeholder="Código de artículo">
						</div>
						<div class="col-md-6 form-group">
							<label for="sku2TI">CÓDIGO ARTÍCULO:</label>
							<input type="text" id="sku2TI" name="sku2TI" class="form-control form-control-sm" value="" placeholder="Código de artículo">
						</div>
					</div>
					<div class="row border">
						<div class="col-md-6 form-group">
							<label for="clasificacionTI">CLASIFICACIÓN</label>
							<select id="clasificacionTI" name="clasificacionTI" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
							</select>
						</div>
						<div class="col-md-6 form-group">
							<label for="inactividadTI">INACTIVIDAD</label>
							<select id="inactividadTI" name="inactividadTI" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="claseDesdeTI">CLASE DESDE</label>
							<select id="claseDesdeTI" name="claseDesdeTI" class="form-control form-control-sm">
								<option value="">::SELECCIONES::</option>
							</select>
						</div>
						<div class="col-md-6 form-group">
							<label for="claseHastaTI">CLASE HASTA</label>
							<select id="claseHastaTI" name="claseHastaTI" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
							</select>
						</div>
					</div>
					<div class="row border">
						<div class="col-md-6 form-group">
							<label for="ubicDesdeTI">UBICACIÓN DESDE</label>
							<select id="ubicDesdeTI" name="ubicDesdeTI" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
							</select>
						</div>
						<div class="col-md-6 form-group">
							<label for="ubicHastaTI">UBICACIÓN HASTA</label>
							<select id="ubicHastaTI" name="ubicHastaTI" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="fechaInicioTI">FECHA DE INICIO:</label>
							<input type="date" id="fechaInicioTI" name="fechaInicioTI" class="form-control form-control-sm" value="{{date('Y-m-d')}}">
						</div>
						<div class="col-md-6 form-group">
							<label for="fechaTerminoTI">FECHA DE TERMINO:</label>
							<input type="date" id="fechaTerminoTI" name="fechaTerminoTI" class="form-control form-control-sm" value="{{date('Y')+1}}{{'-'.date('m-d')}}">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="guardar()">Guardar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="modalInv" class="modal fade">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<form id="formTI" action="" method="POST">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">INVENTARIOS REGISTRADOS</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row">
						<div class="col-md-12" style="overflow-y: auto">
							<table class="table table-striped table-bordered" id="dtInvReg">
								<thead>
									<tr>
										<th style="width:10%" data-orderable="true">NRO. TOMA</th>
										<th style="width:10%" data-orderable="true">INICIO</th>
										<th style="width:15%" data-orderable="true">TERMINO</th>
										<th style="width:15%" data-orderable="true">RESPONSABLE</th>
										<th style="width:15%" data-orderable="true">BODEGA</th>
										<th style="width:15%" data-orderable="true">TIPO INVENTARIO</th>
										<th style="width:15%" data-orderable="true">ESTADO</th>
										<th style="width:05%" data-orderable="false"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>NRO. TOMA</td>
										<td>INICIO</td>
										<td>TERMINO</td>
										<td>RESPONSABLE</td>
										<td>BODEGA</td>
										<td>TIPO INVENTARIO</td>
										<td>ESTADO</td>
										<td> <button type="button" class="btn btn-success" onclick="select_inv('000161')"><i class="fas fa-check"></i></button> </td>
									</tr>
									<tr>
										<td>NRO. TOMA</td>
										<td>INICIO</td>
										<td>TERMINO</td>
										<td>RESPONSABLE</td>
										<td>BODEGA</td>
										<td>TIPO INVENTARIO</td>
										<td>ESTADO</td>
										<td> <button type="button" class="btn btn-success" onclick="select_inv('000181')"><i class="fas fa-check"></i></button> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('inventario:js/toma_inventario.js')}}"></script>
@endsection