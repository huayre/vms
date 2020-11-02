@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Despachos</a></li>
			<li class="breadcrumb-item active">Entrega en ventana</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">FILTRAR ENTREGAS EN VENTANA</h3>
				<div class="card-tools">
	        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
	        	<i class="fas fa-minus"></i>
	        </button>
	      </div>
			</div>
			<div class="card-body text-sm">
				<form action="" id="formEV" method="post">
					@csrf
					<div class="row">
						<div class="col-md-2 form-group">
							<label for="fechaEntregaIniEV">Fecha de entrega</label>
							<input type="date" id="fechaEntregaIniEV" name="fechaEntregaIniEV" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
						</div>
						<div class="col-md-2 form-group">
							<label for="fechaEntregaFinEV">Fecha de entrega</label>
							<input type="date" id="fechaEntregaFinEV" name="fechaEntregaFinEV" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
						</div>
						<div class="col-md-2 form-group">
							<label for="bodegaEV">Bodega</label>
							<select id="bodegaEV" name="bodegaEV" class="form-control form-control-sm">
								@forelse ($bodegaAO as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-2 form-group">
							<label for="nroDocumentoEV">Nro. Documento</label>
							<input type="text" id="nroDocumentoEV" name="nroDocumentoEV" value="" class="form-control form-control-sm" placeholder="Número de documento"/>
						</div>
						<div class="col-md-4 form-group align-self-end">
							<button type="button" class="btn btn-default" id="limpiarEV"> <i class="fas fa-times-circle"></i> Limpiar </button>
							<button type="button" class="btn btn-info" id="buscarEV"> <i class="fas fa-search"></i> Buscar</button>
							<button type="button" class="btn btn-success" id="despachoEV"> <i class="fas fa-truck"></i> Despacho</button>
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
							<th style="width:10%" data-orderable="true">ESTADO</th>
							<th style="width:10%" data-orderable="true">DOCUMENTO</th>
							<th style="width:10%" data-orderable="true">EMISIÓN</th>
							<th style="width:10%" data-orderable="true">DESPACHO</th>
							<th style="width:20%" data-orderable="true">CLIENTE</th>
							<th style="width:20%" data-orderable="true">DIRECCIÓN</th>
							<th style="width:15%" data-orderable="true">CIUDAD</th>
							<th style="width:05%" data-orderable="true"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>ESTADO</td>
							<td>DOCUMENTO</td>
							<td>EMISIÓN</td>
							<td>DESPACHO</td>
							<td>CLIENTE</td>
							<td>DIRECCIÓN</td>
							<td>CIUDAD</td>
							<td> <button type="button" class="btn btn-info" onclick="modalEntregaDetalle(1)"><i class="fas fa-edit"></i></button> </td>
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
						<div class="col-md-12" style="overflow-y: auto">
							<table class="table table-striped table-bordered" id="dtModalDetalles">
								<thead>
									<tr>
										<th data-orderable="true">CÓDIGO</th>
										<th data-orderable="true">ARTICULO</th>
										<th data-orderable="true">UNI. MEDIDA</th>
										<th data-orderable="true">CANTIDAD</th>
										<th data-orderable="true">FECHA ENTREGA</th>
										<th data-orderable="true">OPERADOR</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>CÓDIGO</td>
										<td>ARTICULO</td>
										<td>UNI. MEDIDA</td>
										<td>CANTIDAD</td>
										<td>FECHA ENTREGA</td>
										<td>OPERADOR</td>
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

<div id="modalEVP" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="formEVP" action="" method="POST">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">ENTREGA EN VENTANA</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="pedidoEVP">PEDIDO</label>
							<input type="text" id="pedidoEVP" name="pedidoEVP" class="form-control form-control-sm" value=""/>
						</div>
						<div class="col-md-6 form-group">
							<label for="tipoDocumentoEVP">TIPO DOCUMENTO</label>
							<input type="text" id="tipoDocumentoEVP" name="tipoDocumentoEVP" class="form-control form-control-sm" value="" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="ciudadDespachoEVP">CIUDAD DE DESPACHO</label>
							<input type="text" id="ciudadDespachoEVP" name="ciudadDespachoEVP" class="form-control form-control-sm" value="" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="credencialEVP">COD. CREDENCIAL</label>
							<input type="text" id="credencialEVP" name="credencialEVP" class="form-control form-control-sm" value=""/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="nombreEVP">NOMBRE</label>
							<input type="text" id="nombreEVP" name="nombreEVP" class="form-control form-control-sm" value="" readonly/>
						</div>
						<div class="col-md-6 form-group">
							<label for="rutEVP">R.U.T</label>
							<input type="text" id="rutEVP" name="rutEVP" class="form-control form-control-sm" value="" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="chequearEVP">CHEQUEAR PEDIDO</label>
							<select id="chequearEVP" name="chequearEVP" class="form-control form-control-sm">
								<option value="1">SI</option>
								<option value="0">NO</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="codigoBarraEVP">CÓDIGO BARRA</label>
							<input type="text" id="codigoBarraEVP" name="codigoBarraEVP" class="form-control form-control-sm" value=""/>
						</div>
						<div class="col-md-6 form-group">
							<label for="codigoArticuloEVP">CÓDIGO ARTÍCULO</label>
							<input type="text" id="codigoArticuloEVP" name="codigoArticuloEVP" class="form-control form-control-sm" value="" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="nombreArticuloEVP">NOMBRE ARTÍCULO</label>
							<input type="text" id="nombreArticuloEVP" name="nombreArticuloEVP" class="form-control form-control-sm" value="" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="cantidadEVP">CANTIDAD</label>
							<input type="number" id="cantidadEVP" name="cantidadEVP" class="form-control form-control-sm" value=""/>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="despachar()">Despachar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('despacho:js/entrega_ventana.js')}}"></script>
@endsection