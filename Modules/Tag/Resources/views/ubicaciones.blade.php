@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Etiquetas</a></li>
			<li class="breadcrumb-item active">Ubicaciones</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">Impresión de ubicaciones</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formEU" method="post">
					@csrf
					<div class="row">
						<div class="col-md-2 form-group">
							<label for="bodegaEU">Bodega</label>
							<select id="bodegaEU" name="bodegaEU" class="form-control form-control-sm">
								@forelse ($bodega as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-2 form-group">
							<label for="hileraEU">Hilera</label>
							<select id="hileraEU" name="hileraEU" class="form-control form-control-sm">
								@forelse ($hilera as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-2 form-group">
							<label for="columnaEU">Columna</label>
							<select id="columnaEU" name="columnaEU" class="form-control form-control-sm">
								@forelse ($columna as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-2 form-group">
							<label for="nivelEU">Nivel</label>
							<select id="nivelEU" name="nivelEU" class="form-control form-control-sm">
								@forelse ($nivel as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-4 form-group">
							<label for="almacenamientoEU">Tipo de almacenamiento</label>
							<select id="almacenamientoEU" name="almacenamientoEU" class="form-control form-control-sm">
								@forelse ($tipo_almacenamiento as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-12 form-group align-self-end text-right">
						<button type="button" class="btn btn-success" id="printEU"> <i class="fas fa-print"></i> Imprimir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('etiqueta:js/app.js')}}"></script>
@endsection