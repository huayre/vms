@extends('template.index')

@section('css')
	<link rel="stylesheet" href="{{Module::asset('almacenamiento:sass/app.scss')}}">
@endsection

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
				<form action="" id="formMP" method="post">
					@csrf
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="bodegaMP">Bodega</label>
							<select id="bodegaMP" name="bodegaMP" class="form-control form-control-sm">
								<option value="">::SELECCIONE::</option>
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-9 form-group align-self-end">
							<button type="button" class="btn btn-info" id="buscarMP"> <i class="fas fa-search"></i> Buscar</button>
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
	    <div class="card-body text-sm">
				<div class="row">
					<div class="col-md-12" id="hilerasOB"></div>
				</div>
				<div class="row mt-3">
					<div class="col-md-12 border" id="mapaOB"></div>
				</div>
	    </div>
	  </div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('almacenamiento:js/mapa.js')}}"></script>
@endsection