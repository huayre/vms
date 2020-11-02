@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Despachos</a></li>
			<li class="breadcrumb-item active">Entrega no catalogados</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">FILTRAR ENTREGAS NO CATALOGADAS</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formENC" method="post">
					@csrf
					<div class="row">
						<div class="col-md-2 form-group">
							<label for="fechaEntrIniENC">Fecha de entrega</label>
							<input type="date" id="fechaEntrIniENC" name="fechaEntrIniENC" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
						</div>
						<div class="col-md-2 form-group">
							<label for="fechaEmiIniENC">Fecha de entrega</label>
							<input type="date" id="fechaEmiFinENC" name="fechaEmiFinENC" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
						</div>
						<div class="col-md-2 form-group">
							<label for="bodegaENC">Bodega</label>
							<select id="bodegaENC" name="bodegaENC" class="form-control form-control-sm">
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-2 form-group">
							<label for="nroOrdenCompraENC">Nro. Orden de compra</label>
							<input type="text" id="nroOrdenCompraENC" name="nroOrdenCompraENC" value="" class="form-control form-control-sm" placeholder="Número de oc"/>
						</div>
						<div class="col-md-4 form-group align-self-end">
							<button type="button" class="btn btn-default" id="limpiarENC"> <i class="fas fa-times-circle"></i> Limpiar </button>
							<button type="button" class="btn btn-info" id="buscarENC"> <i class="fas fa-search"></i> Buscar</button>
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
							<th style="width:10%" data-orderable="true">DOCUMENTO</th>
							<th style="width:10%" data-orderable="true">ARTÍCULO</th>
							<th style="width:25%" data-orderable="true">DESCRIPCIÓN</th>
							<th style="width:10%" data-orderable="true">UNI. MEDIDA</th>
							<th style="width:10%" data-orderable="true">F. ENTREGA</th>
							<th style="width:10%" data-orderable="true">OPERADOR</th>
							<th style="width:25%" data-orderable="true">CLIENTE</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>DOCUMENTO</td>
							<td>ARTÍCULO</td>
							<td>DESCRIPCIÓN</td>
							<td>UNI. MEDIDA</td>
							<td>FECHA ENTREGA</td>
							<td>OPERADOR</td>
							<td>CLIENTE</td>
						</tr>
					</tbody>
				</table>
	    </div>
	  </div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('despacho:js/entrega_no_catalogados.js')}}"></script>
@endsection