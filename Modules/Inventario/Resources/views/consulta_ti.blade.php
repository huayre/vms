@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Inventario</a></li>
			<li class="breadcrumb-item active">Consulta toma de inventario</li>
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
							<label for="codigoInvCTI">Número de inventario</label>
							<input type="text" id="codigoInvCTI" name="codigoInvCTI" value="" class="form-control form-control-sm" placeholder="Número de inventario" readonly/>
						</div>
						<div class="col-md-2 form-group">
							<label for="fechaInvCreaCTI">Fecha de creación</label>
							<input type="date" id="fechaInvCreaCTI" name="fechaInvCreaCTI" value="" class="form-control form-control-sm" readonly/>
						</div>
						<div class="col-md-2 form-group">
							<label for="fechaInvIniCTI">Fecha inicio</label>
							<input type="date" id="fechaInvIniCTI" name="fechaInvIniCTI" value="" class="form-control form-control-sm" readonly/>
						</div>
						<div class="col-md-2 form-group">
							<label for="fechaInvFinCTI">Fecha término</label>
							<input type="date" id="fechaInvFinCTI" name="fechaInvFinCTI" value="" class="form-control form-control-sm" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="tipoInvCTI">Tipo de toma de inventario</label>
							<input type="text" id="tipoInvCTI" name="tipoInvCTI" value="" class="form-control form-control-sm" placeholder="General" readonly/>
						</div>
						<div class="col-md-4 form-group">
							<label for="respInvCTI">Responsable</label>
							<input type="text" id="respInvCTI" name="respInvCTI" value="" class="form-control form-control-sm" placeholder="Responsable" readonly/>
						</div>
						<div class="col-md-4 form-group">
							<label for="estadoInvCTI">Estado</label>
							<input type="text" id="estadoInvCTI" name="estadoInvCTI" value="" class="form-control form-control-sm" placeholder="Estado" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group align-self-end text-right">
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
							<th style="width:40%" data-orderable="true">NOMBRE</th>
							<th style="width:15%" data-orderable="true">TOTAL xTEK</th>
							<th style="width:15%" data-orderable="true">TOTAL INVENTARIADO</th>
							<th style="width:15%" data-orderable="true">DIFERENCIA</th>
							<th style="width:05%" data-orderable="false"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>COD. ARTÍCULO</td>
							<td>NOMBRE</td>
							<td>TOTAL xTEK</td>
							<td>TOTAL INVENTARIADO</td>
							<td>DIFERENCIA</td>
							<td> <button type="button" class="btn btn-info" onclick="view_articulo('000161', 'producto')"><i class="fas fa-file"></i></button> </td>
						</tr>
					</tbody>
				</table>
	    </div>
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

<div id="modalDetalle" class="modal fade">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<form id="formTI" action="" method="POST">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">CONSULTA INVENTARIO DE ARTÍCULO POR UBICACIÓN</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row">
						<div class="col-md-3">
							<label for="">ARTÍCULO:</label>
							<input type="text" id="skuMDT" val="" class="form-control" placeholder="SKU del artículo" disabled>
						</div>
						<div class="col-md-9 align-self-end">
							<input type="text" id="articuloMDT" val="" class="form-control" placeholder="Nombre del artículo" disabled>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-12" style="overflow-y: auto">
							<table class="table table-striped table-bordered" id="dtResultDetalle">
								<thead>
									<tr>
										<th style="width:12%" data-orderable="true">UBICACIÓN</th>
										<th style="width:10%" data-orderable="true">HILERA</th>
										<th style="width:10%" data-orderable="true">COLUMNA</th>
										<th style="width:10%" data-orderable="true">NIVEL</th>
										<th style="width:13%" data-orderable="true">CANT. EMPAQUE</th>
										<th style="width:10%" data-orderable="true">CANT UNI.</th>
										<th style="width:15%" data-orderable="true">OPERADOR</th>
										<th style="width:15%" data-orderable="true">F. INGRESO</th>
										<th style="width:05%" data-orderable="false"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>UBICACIÓN</td>
										<td>HILERA</td>
										<td>COLUMNA</td>
										<td>NIVEL</td>
										<td>CANT. EMPAQUE</td>
										<td>CANT UNI.</td>
										<td>OPERADOR</td>
										<td>F. INGRESO</td>
										<td> <button type="button" class="btn btn-success" onclick="delete_articulo('inventario', 'ubicacion', 'articulo')"><i class="fas fa-trash"></i></button> </td>
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
	<script src="{{Module::asset('inventario:js/consulta_ti.js')}}"></script>
@endsection