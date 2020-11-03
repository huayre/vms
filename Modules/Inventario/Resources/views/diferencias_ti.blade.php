@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Inventario</a></li>
			<li class="breadcrumb-item active">Diferencias de toma de inventario</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="callout callout-info">
	<h5>Información importante.</h5>
	<p>Las diferencias expresadas solo reflejan una realidad cuando no se han hecho movimientos de artículos después del inventario.</p>
</div>

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
							<button type="button" class="btn btn-warning" id="reconteoCTI"> <i class="fas fa-boxes"></i> Recontar</button>
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
							<th style="width:15%" data-orderable="true">UBICACIÓN</th>
							<th style="width:15%" data-orderable="true">COD. ARTÍCULO</th>
							<th style="width:25%" data-orderable="true">NOMBRE</th>
							<th style="width:15%" data-orderable="true">CANT. UBICACIÓN</th>
							<th style="width:15%" data-orderable="true">CANT. INVENTARIO</th>
							<th style="width:15%" data-orderable="true">DIFERENCIA</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>UBICACIÓN</td>
							<td>COD. ARTÍCULO</td>
							<td>NOMBRE</td>
							<td>CANT. UBICACIÓN</td>
							<td>CANT. INVENTARIO</td>
							<td>DIFERENCIA</td>
						</tr>
					</tbody>
				</table>
	    </div>
	  </div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('inventario:js/diferencias_ti.js')}}"></script>
@endsection