@extends('despacho::layouts.master')

@section('header')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Despachos</a></li>
			<li class="breadcrumb-item active">Estado de preparación</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">FILTRAR PEDIDOS</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formEP" method="post">
					@csrf
					<div class="row">
						<div class="col-md-3">
							<label for="fechaEmiIniEP">Fecha de emisión</label>
							<input type="date" id="fechaEmiIniEP" name="fechaEmiIniEP" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
							<input type="date" id="fechaEmiFinEP" name="fechaEmiFinEP" value="" class="form-control form-control-sm mt-2" placeholder="{{date('Y-m-d')}}"/>
						</div>
						<div class="col-md-3 form-group">
							<label for="bodegaEP">Bodega / Nro. Documento</label>
							<select id="bodegaEP" name="bodegaEP" class="form-control form-control-sm">
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
							<input type="text" id="nroDocumentoEP" name="nroDocumentoEP" value="" class="form-control form-control-sm mt-2" placeholder="Número de documento"/>
						</div>
						<div class="col-md-3 form-group">
							<label for="estadoPedidoEP">Estado</label>
							<select id="estadoPedidoEP" name="estadoPedidoEP" class="form-control form-control-sm">
								@forelse ($estadoPedidoAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-3 align-self-end text-right">
							<button type="button" class="btn btn-default" id="limpiarEP"> <i class="fas fa-times-circle"></i> Limpiar </button>
							<button type="button" class="btn btn-success" id="buscarEP"> <i class="fas fa-search"></i> Buscar</button>
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
							<th style="width:15%" data-orderable="true">ESTADO</th>
							<th style="width:15%" data-orderable="true">NRO. PEDIDO</th>
							<th style="width:15%" data-orderable="true">DOCUMENTO</th>
							<th style="width:15%" data-orderable="true">EMISIÓN</th>
							<th style="width:15%" data-orderable="true">DESPACHO</th>
							<th style="width:20%" data-orderable="true">CLIENTE</th>
							<th style="width:05%" data-orderable="false"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>ESTADO</td>
							<td>PEDIDO</td>
							<td>DOCUMENTO</td>
							<td>EMISION</td>
							<td>DESPACHO</td>
							<td>CLIENTE</td>
							<td> <button type="button" class="btn btn-info" onclick="viewDetails(1)"><i class="fas fa-file"></i></button> </td>
						</tr>
					</tbody>
				</table>
	    </div>
	  </div>
	</div>
</div>

<div id="modalDetalles" class="modal fade">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">DETALLES DEL DOCUMENTO</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row mb-2">
						<div class="col-md-5">
							<h6>Nro. de documento: <span id="modalPedido">N0000</span> </h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped table-bordered" id="dtModalDetalles">
								<thead>
									<tr>
										<th style="width:10%" data-orderable="true">LINEA</th>
										<th style="width:10%" data-orderable="true">CÓDIGO</th>
										<th style="width:20%" data-orderable="true">ARTICULO</th>
										<th style="width:10%" data-orderable="true">SOLICITADO</th>
										<th style="width:10%" data-orderable="true">UNI. MEDIDA</th>
										<th style="width:10%" data-orderable="true">UNIDADES</th>
										<th style="width:10%" data-orderable="true">PREPARADO</th>
										<th style="width:10%" data-orderable="true">DIFERENCIA</th>
										<th style="width:10%" data-orderable="true">PICKING</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>LINEA</td>
										<td>CÓDIGO</td>
										<td>ARTICULO</td>
										<td>SOLICITADO</td>
										<td>UNI. MEDIDA</td>
										<td>UNIDADES</td>
										<td>PREPARADO</td>
										<td>DIFERENCIA</td>
										<td>PICKING</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				</div>
		</div>
	</div>
</div>
@endsection

@section('loadJS')
	<script src="{{Module::asset('despacho:js/preparacion.js')}}"></script>
@endsection