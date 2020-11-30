@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Almacenamiento</a></li>
			<li class="breadcrumb-item active">Administración de ubicación física</li>
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
				<form action="" id="formAU" method="post">
					@csrf
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="bodegaAU">Bodega</label>
							<select id="bodegaAU" name="bodegaAU" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-9 form-group align-self-end">
							<button type="button" class="btn btn-success" id="nuevoAU"> <i class="fas fa-plus"></i> Nuevo</button>
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
							<th style="width:10%" data-orderable="true">COD. UBICACIÓN</th>
							<th style="width:30%" data-orderable="true">HILERA</th>
							<th style="width:15%" data-orderable="true">COLUMNA</th>
							<th style="width:15%" data-orderable="true">NIVEL</th>
							<th style="width:15%" data-orderable="true">NOMBRE ALMACENAJE</th>
							<th style="width:15%" data-orderable="true">NOMBRE ZONA</th>
							<th style="width:15%" data-orderable="true">COMPARTE ALMACENAJE</th>
							<th style="width:15%" data-orderable="true">ESTADO</th>
							<th style="width:15%" data-orderable="false"></th>
							<th style="width:15%" data-orderable="false"></th>
						</tr>
					</thead>
					<tbody class="details"></tbody>
				</table>
	    </div>
	  </div>
	</div>
</div>

<div id="modalUF" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="formUF" action="" method="POST">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">DETALLES DE UBICACIÓN</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="bodegaUF">Bodega</label>
							<select id="bodegaUF" name="bodegaUF" class="form-control form-control-sm">
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-6 form-group">
							<label for="zonaUF">NAVE / PATIO:</label>
							<select id="zonaUF" name="zonaUF" class="form-control form-control-sm">
								<option value="1">Nave</option>
								<option value="2">Patio</option>
							</select>
						</div>
					</div>
					<div class="row border">
						<div class="col-md-12 form-group">
							<label for="tipoUbicUF">TIPO UBICACIÓN</label>
							<select id="tipoUbicUF" name="tipoUbicUF" class="form-control form-control-sm">
								<option value="1">RACK</option>
								<option value="2">ESTANTERÍA</option>
								<option value="3">PAL Ó PISO</option>
								<option value="4">KARDEX</option>
								<option value="5">CONTENEDOR</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="naveUF">NAVE:</label>
							<input type="text" id="naveUF" name="naveUF" class="form-control form-control-sm" value="" placeholder="99">
						</div>
						<div class="col-md-3 form-group">
							<label for="hileraUF">HILERA:</label>
							<input type="text" id="hileraUF" name="hileraUF" class="form-control form-control-sm" value="" placeholder="99">
						</div>
						<div class="col-md-3 form-group">
							<label for="columnaUF">COLUMNA:</label>
							<select id="columnaUF" name="columnaUF" class="form-control form-control-sm">
								@forelse ($columnas as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-3 form-group">
							<label for="nivelUF">NIVEL:</label>
							<input type="text" id="nivelUF" name="nivelUF" class="form-control form-control-sm" value="" placeholder="99">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="codigoUF">CÓDIGO DE UBICACIÓN:</label>
							<input type="text" id="codigoUF" name="codigoUF" class="form-control form-control-sm" value="" placeholder="MN99-E099-A9">
						</div>
						<div class="col-md-3 form-group">
							<label for="compartirUF">COMPARTIR ALMACENAJE:</label>
							<select id="compartirUF" name="compartirUF" class="form-control form-control-sm">
								<option value="0">NO</option>
								<option value="1">SI</option>
							</select>
						</div>
						<div class="col-md-3 form-group">
							<label for="tipoZonaUF">TIPO DE ZONA:</label>
							<select id="tipoZonaUF" name="tipoZonaUF" class="form-control form-control-sm">
								@forelse ($tipoZona as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-3 form-group">
							<label for="estadoUbicacionUF">TIPO DE ZONA:</label>
							<select id="estadoUbicacionUF" name="estadoUbicacionUF" class="form-control form-control-sm">
								@forelse ($estadoUbicacion as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
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
@endsection

@section('script')
	<script src="{{Module::asset('almacenaje:js/admin_ubicacion.js')}}"></script>
@endsection
