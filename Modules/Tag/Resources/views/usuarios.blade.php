@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Etiquetas</a></li>
			<li class="breadcrumb-item active">Usuarios</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">Impresión etiquetas de operador</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formUS" method="post">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped table-bordered" id="dtResultIndex">
								<thead>
									<tr>
										<th style="width:05%" data-orderable="false"></th>
										<th style="width:95%" data-orderable="false">OPERADOR</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> <input type="checkbox" id="operadorUS" name="operadorUS" value="" class="form-checkbox"/> </td>
										<td> <label for="operadorUS">Operador</label> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-12 form-group align-self-end text-right">
						<button type="button" class="btn btn-success" id="printUS"> <i class="fas fa-print"></i> Imprimir</button>
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