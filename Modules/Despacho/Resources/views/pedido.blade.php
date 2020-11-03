@extends('template.index')

@section('header_content')
<div class="row mb-2">
	<div class="col-sm-6">
		<h1 class="m-0 text-dark"></h1>
	</div>
	<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Despachos</a></li>
			<li class="breadcrumb-item active">Mantención de pedidos</li>
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
				<form action="" id="formPD" method="post">
					@csrf
					<div class="row">
						<div class="col-md-2 form-group">
							<label for="skuPD">SKU</label>
							<input type="text" id="skuPD" name="skuPD" value="" class="form-control form-control-sm" placeholder="SKU"/>
						</div>
						<div class="col-md-4 form-group">
							<label for="articuloPD">Articulo</label>
							<input type="text" id="articuloPD" name="articuloPD" value="" class="form-control form-control-sm" placeholder="Nombre del articulo" readonly/>
						</div>
						<div class="col-md-2 form-group">
							<label for="rucPD">RUC</label>
							<input type="text" id="rucPD" name="rucPD" value="" class="form-control form-control-sm" placeholder="RUC/DNI"/>
						</div>
						<div class="col-md-4 form-group">
							<label for="denominacionPD">Denominación</label>
							<input type="text" id="denominacionPD" name="denominacionPD" value="" class="form-control form-control-sm" placeholder="Nombre ó razon social" readonly/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 form-group">
							<label for="documentoPD">Tipo de documento</label>
							<select id="documentoPD" name="documentoPD" class="form-control form-control-sm" multiple>
								@forelse ($documentoPD as $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-3 form-group">
							<label for="estadoPD">Estado de pedido</label>
							<select id="estadoPD" name="estadoPD" class="form-control form-control-sm" multiple>
								@forelse ($estadoPD as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-3 form-group">
							<label for="emisorPD">Emisor</label>
							<select id="emisorPD" name="emisorPD" class="form-control form-control-sm" multiple>
								@forelse ($emisorPD as $key => $val)
									<option value="{{$val->id}}">{{$val->descripcion}}</option>
									@empty
									<option value="">:: Sin datos ::</option>
								@endforelse
							</select>
						</div>
						<div class="col-md-3 form-group">
							<div class="row">
								<div class="col-md-12">
									<label for="fechaEmiPD">Fecha emisión</label>
									<input type="date" id="fechaEmiPD" name="fechaEmiPD" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="fechaDespPD" class="mb-0">Fecha despacho</label>
									<input type="date" id="fechaDespPD" name="fechaDespPD" value="" class="form-control form-control-sm" placeholder="{{date('Y-m-d')}}"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-auto form-group">
							<button type="button" class="btn btn-default" id="limpiarPD"> <i class="fas fa-times-circle"></i> Limpiar </button>
							<button type="button" class="btn btn-info" id="buscarPD"> <i class="fas fa-search"></i> Buscar</button>
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
							<th style="width:10%" data-orderable="true">PEDIDO</th>
							<th style="width:10%" data-orderable="true">DOCUMENTO</th>
							<th style="width:10%" data-orderable="true">BODEGA</th>
							<th style="width:10%" data-orderable="true">EMISIÓN</th>
							<th style="width:10%" data-orderable="true">DESPACHO</th>
							<th style="width:35%" data-orderable="true">CLIENTE</th>
							<th style="width:05%" data-orderable="false"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>ESTADO</td>
							<td>PEDIDO</td>
							<td>DOCUMENTO</td>
							<td>BODEGA</td>
							<td>{{date('d-m-Y')}}</td>
							<td>{{date('d-m-Y')}}</td>
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
					<h4 class="modal-title">DETALLES DEL PEDIDO</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row mb-2">
						<div class="col-md-5">
							<h6>Nro. de pedido: <span id="modalPedido">0000</span> </h6>
						</div>
						<div class="col-md-5">
							<h6>Nro. de documento: <span id="modalPedido">N0000</span> </h6>
						</div>
						<div class="col-md-2 text-right">
							<button id="btn-pedido" type="button" class="btn btn-success text-sm" value=""><i class="fas fa-edit"></i> Agregar linea</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped table-bordered" id="dtModalDetalles">
								<thead>
									<tr>
										<th style="width:10%" data-orderable="true">LINEA</th>
										<th style="width:10%" data-orderable="true">ARTICULO</th>
										<th style="width:40%" data-orderable="true">NOMBRE ARTICULO</th>
										<th style="width:10%" data-orderable="true">UNI. MEDIDA</th>
										<th style="width:10%" data-orderable="true">CANTIDAD</th>
										<th style="width:10%" data-orderable="true">UNIDADES</th>
										<th style="width:05%" data-orderable="false"></th>
										<th style="width:05%" data-orderable="false"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>LINEA</td>
										<td>COD. ARTICULO</td>
										<td>NOMBRE ARTICULO</td>
										<td>UNIDAD MEDIDA</td>
										<td>
											<form action="#" method="POST">
												@csrf
												<input type="hidden" id="pedido-1" value="">
												<input type="hidden" id="lineaVa-1" value="1">
												<input type="number" id="linea-1" name="linea" value="1" min="1" class="form-control form-control-sm" readonly>
											</form>
										</td>
										<td>UNIDADES</td>
										<td>
											<button type="button" id="actionEdit-1" class="btn btn-info text-sm" onclick="editItem(1)"><i class="fas fa-edit"></i></button>
											<button type="button" id="actionUpdate-1" class="btn btn-success text-sm d-none" onclick="updateItem(1)"><i class="fas fa-check"></i></button>
										</td>
										<td>
											<button type="button" id="actionDelete-1" class="btn btn-danger text-sm" onclick="trashItem(1)"><i class="fas fa-trash"></i> </button>
											<button type="button" id="actionRedo-1" class="btn btn-secondary text-sm d-none" onclick="redoItem(1)"><i class="fas fa-redo"></i> </button>
										</td>
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

<div id="modalAI" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="formAI" action="" method="POST">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">AGREGAR ITEM AL PEDIDO</h4>
				</div>
				<div class="modal-body text-sm">
					<div class="row mt-2">
						<div class="col-md-6">
							<label for="pedidoAI">PEDIDO</label>
							<input type="text" id="pedidoAI" name="pedidoAI" class="form-control form-control-sm" readonly value="">
						</div>
						<div class="col-md-6">
							<label for="lineaAI">LINEA</label>
							<input type="text" id="lineaAI" name="lineaAI" class="form-control form-control-sm" readonly value="">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-12">
							<label for="skuAI">SKU</label>
							<input type="text" id="skuAI" name="skuAI" placeholder="SKU del articulo" class="form-control form-control-sm" value="">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-12">
							<input type="text" id="itemAI" name="itemAI" placeholder="Nombre del articulo" class="form-control form-control-sm" value="" readonly>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-4">
							<label for="unidadMedidaAI">UNIDAD MEDIDA</label>
							<input type="text" id="unidadMedidaAI" name="unidadMedidaAI" class="form-control form-control-sm" value="" readonly>
						</div>
						<div class="col-md-4">
							<label for="cantidadAI">CANTIDAD</label>
							<input type="text" id="cantidadAI" name="cantidadAI" class="form-control form-control-sm" value="">
						</div>
						<div class="col-md-4">
							<label for="unidadesAI">UNIDADES</label>
							<input type="text" id="unidadesAI" name="unidadesAI" class="form-control form-control-sm" value="" readonly>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="saveItem()">Guardar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{Module::asset('despacho:js/pedido.js')}}"></script>
@endsection