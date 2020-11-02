@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Despachos</a></li>
			<li class="breadcrumb-item active">Asignar operador</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">FILTRAR ASIGNACIONES</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formAO" method="post">
					@csrf
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="bodegaAO">Bodega</label>
							<select id="bodegaAO" name="bodegaAO" class="form-control form-control-sm">
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-4 form-group">
							<label for="tipoPedidoAO">Tipo de pedido</label>
							<select id="tipoPedidoAO" name="tipoPedidoAO" class="form-control form-control-sm">
								@forelse ($tipoPedidoAO as $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-4 form-group">
							<label for="estadoPedidoAO">Estado de asignación</label>
							<select id="estadoPedidoAO" name="estadoPedidoAO" class="form-control form-control-sm">
								@forelse ($estadoPedidoAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
					</div>
					<div class="row border">
						<div class="col-md-5 border-right form-group">
							<label for="fechaDespIniAO">Fecha de despacho</label>
							<div class="row">
								<div class="col-md-6">
									<label for="fechaDespIniAO">Inicio</label>
									<input type="date" id="fechaDespIniAO" name="fechaDespIniAO" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
								</div>
								<div class="col-md-6">
									<label for="fechaDespFinAO">Termino</label>
									<input type="date" id="fechaDespFinAO" name="fechaDespFinAO" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
								</div>
							</div>
						</div>
						<div class="col-md-5 border-left form-group">
							<label for="fechaPrepIniAO">Fecha de preparación</label>
							<div class="row">
								<div class="col-md-6">
									<label for="fechaPrepIniAO">Inicio</label>
									<input type="date" id="fechaPrepIniAO" name="fechaPrepIniAO" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
								</div>
								<div class="col-md-6">
									<label for="fechaPrepFinAO">Termino</label>
									<input type="date" id="fechaPrepFinAO" name="fechaPrepFinAO" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
								</div>
							</div>
						</div>
						<div class="col-auto form-group align-self-end">
							<button type="button" class="btn btn-default" id="limpiarAO"> <i class="fas fa-times-circle"></i> Limpiar </button>
							<button type="button" class="btn btn-info" id="buscarAO"> <i class="fas fa-search"></i> Buscar</button>
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
							<th style="width:05%" data-orderable="true">PRIORIDAD</th>
							<th style="width:10%" data-orderable="true">PEDIDO</th>
							<th style="width:10%" data-orderable="true">TIPO PEDIDO</th>
							<th style="width:10%" data-orderable="true">DOCUMENTO</th>
							<th style="width:10%" data-orderable="true">FEC. DESPACHO</th>
							<th style="width:10%" data-orderable="true">CLIENTE</th>
							<th style="width:10%" data-orderable="true">OPERADOR</th>
							<th style="width:10%" data-orderable="true">PREPARACIÓN</th>
							<th style="width:10%" data-orderable="true">BOD. DESTINO</th>
							<th style="width:10%" data-orderable="true">CIU. DESPACHO</th>
							<th style="width:05%" data-orderable="false"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>PRIORIDAD</td>
							<td>PEDIDO</td>
							<td>TIPO PEDIDO</td>
							<td>DOCUMENTO</td>
							<td>FEC. DESPACHO</td>
							<td>CLIENTE</td>
							<td>OPERADOR</td>
							<td>PREPARACIÓN</td>
							<td>BOD. DESTINO</td>
							<td>CIU. DESPACHO</td>
							<td> <button type="button" class="btn btn-info" onclick="modalAO(1)"><i class="fas fa-edit"></i></button> </td>
						</tr>
					</tbody>
				</table>
	    </div>
	  </div>
	</div>
</div>

<div id="modalCA" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="formCA" action="" method="POST">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">MODIFICAR ASIGNACIÓN</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row mt-2">
						<div class="col-md-6 form-group">
							<label for="pedidoCA">PEDIDO</label>
							<input type="text" id="pedidoCA" name="pedidoCA" class="form-control form-control-sm" readonly value="">
						</div>
						<div class="col-md-6 form-group">
							<label for="documentoCA">DOCUMENTO</label>
							<input type="text" id="documentoCA" name="documentoCA" class="form-control form-control-sm" readonly value="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="prioridadCA">PRIORIDAD</label>
							<select id="prioridadCA" name="prioridadCA" class="form-control form-control-sm">
								<option value="9">9</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="fechaDespCA">FECHA DESPACHO</label>
							<input type="date" id="fechaDespCA" name="fechaDespCA" class="form-control form-control-sm" value="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="operadorCA">OPERADOR</label>
							<select id="operadorCA" name="operadorCA" class="form-control form-control-sm">
								<option value="">::SELECCIONES::</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="">Guardar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('despacho:js/asignar_operador.js')}}"></script>
@endsection