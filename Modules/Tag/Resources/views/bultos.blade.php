@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Etiquetas</a></li>
			<li class="breadcrumb-item active">Bultos</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">Impresión de bultos</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formEB" method="post">
					@csrf
					<div class="row">
						<div class="col-md-2 form-group">
							<label for="nroInicialEB">Número inicial</label>
							<input type="number" id="nroInicialEB" name="nroInicialEB" class="form-control form-control-sm" value="" placeholder="Número inicial"/>
						</div>
						<div class="col-md-2 form-group">
							<label for="cantidadEB">Cantidad</label>
							<input type="number" id="cantidadEB" name="cantidadEB" class="form-control form-control-sm" value="" placeholder="Cantidad"/>
						</div>
						<div class="col-md-8 form-group align-self-end">
							<button type="button" class="btn btn-success" id="printEB"> <i class="fas fa-print"></i> Imprimir</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('etiqueta:js/app.js')}}"></script>
@endsection