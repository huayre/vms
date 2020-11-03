@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Despachos</a></li>
			<li class="breadcrumb-item active">Reingreso de articulos</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">FILTRAR REINGRESOS DE ARTÍCULOS</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formRE" method="post">
					@csrf
					<div class="row">
						<div class="col-md-2 form-group">
							<label for="fechaReingresoIniRE">Fecha de reingreso</label>
							<input type="date" id="fechaReingresoIniRE" name="fechaReingresoIniRE" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
						</div>
						<div class="col-md-2 form-group">
							<label for="fechaReingresoFinRE">Fecha de reingreso</label>
							<input type="date" id="fechaReingresoFinRE" name="fechaReingresoFinRE" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
						</div>
						<div class="col-md-2 form-group">
							<label for="bodegaRE">Bodega</label>
							<select id="bodegaRE" name="bodegaRE" class="form-control form-control-sm">
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-2 form-group">
							<label for="skuRE">Artículo</label>
							<input type="text" id="skuRE" name="skuRE" value="" class="form-control form-control-sm" placeholder="Código del artículo"/>
						</div>
						<div class="col-md-2 form-group align-self-end">
							<input type="text" id="nombreRE" name="nombreRE" value="" class="form-control form-control-sm" placeholder="Nombre del artículo" readonly/>
						</div>
						<div class="col-md-2 form-group align-self-end">
							<button type="button" class="btn btn-default" id="limpiarRE"> <i class="fas fa-times-circle"></i> Limpiar </button>
							<button type="button" class="btn btn-info" id="buscarRE"> <i class="fas fa-search"></i> Buscar</button>
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
				<table class="table table-striped table-bordered" id="dtResultReingreso">
					<thead>
						<tr>
							<th style="width:10%" data-orderable="true">COD. ARTÍCULO</th>
							<th style="width:10%" data-orderable="true">NOMBRE</th>
							<th style="width:10%" data-orderable="true">UNI.  MEDIDA</th>
							<th style="width:10%" data-orderable="true">COD. UBICACIÓN</th>
							<th style="width:20%" data-orderable="true">REINGRESADO</th>
							<th style="width:20%" data-orderable="true">BODEGA</th>
							<th style="width:15%" data-orderable="true">FECHA REINGRESO</th>
							<th style="width:05%" data-orderable="true">OPERADOR</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>COD. ARTÍCULO</td>
							<td>NOMBRE</td>
							<td>UNI.  MEDIDA</td>
							<td>COD. UBICACIÓN</td>
							<td>REINGRESADO</td>
							<td>BODEGA</td>
							<td>FECHA REINGRESO</td>
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
	<script src="{{Module::asset('despacho:js/app.js')}}"></script>
@endsection