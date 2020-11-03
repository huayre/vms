@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Inventario</a></li>
			<li class="breadcrumb-item active">xTek vs MIMS</li>
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
				<form action="" id="formXT" method="post">
					@csrf
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="bodegaXT">Bodega</label>
							<select id="bodegaXT" name="bodegaXT" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-9 form-group align-self-end">
							<button type="button" class="btn btn-secondary" id="imprimirXT"> <i class="fas fa-print"></i> Imprimir</button>
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
				<table class="table table-striped table-bordered" id="dtResultXTekMims">
					<thead>
						<tr>
							<th style="width:15%" data-orderable="true">COD. ARTÍCULO</th>
							<th style="width:25%" data-orderable="true">NOMBRE</th>
							<th style="width:06%" data-orderable="true">PROPIO xTEK</th>
							<th style="width:06%" data-orderable="true">PROPIO MIMS</th>
							<th style="width:06%" data-orderable="true">CONS. xTEK</th>
							<th style="width:06%" data-orderable="true">CONS. MIMSK</th>
							<th style="width:06%" data-orderable="true">TOTAL xTEK</th>
							<th style="width:06%" data-orderable="true">TOTAL MIMS</th>
							<th style="width:06%" data-orderable="true">VAL. xTEK</th>
							<th style="width:06%" data-orderable="true">VAL. MIMS</th>
							<th style="width:06%" data-orderable="true">DIFERENCIA xTEK</th>
							<th style="width:06%" data-orderable="true">DIFERENCIA MIMS</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>COD. ARTÍCULO</td>
							<td>NOMBRE</td>
							<td>PROPIO xTEK</td>
							<td>PROPIO MIMS</td>
							<td>CONS. xTEK</td>
							<td>CONS. MIMSK</td>
							<td>TOTAL xTEK</td>
							<td>TOTAL MIMS</td>
							<td>VAL. xTEK</td>
							<td>VAL. MIMS</td>
							<td>DIFERENCIA xTEK</td>
							<td>DIFERENCIA MIMS</td>
						</tr>
					</tbody>
				</table>
	    </div>
	  </div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('inventario:js/app.js')}}"></script>
@endsection