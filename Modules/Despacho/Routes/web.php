<?php
use Illuminate\Support\Facades\Route;
use Modules\Despacho\Http\Controllers\RfPedidoController;
use Modules\Despacho\Http\Controllers\RfEntegraVentanaController;
use Modules\Despacho\Http\Controllers\RFReingresoController;

Route::prefix('despacho')->group(function() {
    Route::get('pedido', 'PedidoController@index')->name('despacho.pedido');
});

Route::prefix('despacho')->group(function() {
    Route::get('asignacion', 'PedidoController@asignacion')->name('despacho.asignacion');
});

Route::prefix('despacho')->group(function() {
    Route::get('preparacion', 'PedidoController@preparacion')->name('despacho.preparacion');
});

Route::prefix('despacho')->group(function() {
    Route::get('entrega_ventana', 'PedidoController@entrega_ventana')->name('despacho.entrega_ventana');
});

Route::prefix('despacho')->group(function() {
    Route::get('no_catalogados', 'PedidoController@entrega_nocatalogados')->name('despacho.no_catalogados');
});

Route::prefix('despacho')->group(function() {
    Route::get('picking', 'PedidoController@picking')->name('despacho.picking');
});

Route::prefix('despacho')->group(function() {
    Route::get('conciliacion_despacho', 'PedidoController@conciliacion_despacho')->name('despacho.conciliacion_despacho');
});

Route::prefix('despacho')->group(function() {
    Route::get('reingreso_articulos', 'PedidoController@reingreso_articulos')->name('despacho.reingreso_articulos');
});

//rutas rf pedidos
Route::view('rf_p_menu','despacho::rf.pedidos.opciones')->name('rf_p_menu');
//rutas rf preparar pedidos
Route::get('rf_p_mayorprioridad',[RfPedidoController::class,'mayorprioridad'])->name('rf_p_mayorprioridad');
Route::get('rf_p_aceptapreparar',[RfPedidoController::class,'aceptaPreparar'])->name('rf_p_aceptapreparar');
Route::get('rf_p_noaceptapreparar',[RfPedidoController::class,'noaceptaPreparar'])->name('rf_p_noaceptapreparar');
Route::post('rf_p_detallepedido',[RfPedidoController::class,'docPedido'])->name('rf_p_detallepedido');
Route::get('rf_p_codubicacion',[RfPedidoController::class,'codubicacion'])->name('rf_p_codubicacion');
Route::post('rf_p_pantallainformacion',[RfPedidoController::class,'pantallaInformacion'])->name('rf_p_pantallainformacion');
Route::get('rf_p_cantidadretirar',[RfPedidoController::class,'cantidadretirar'])->name('rf_p_cantidadretirar');
Route::post('rf_p_procesoterminado',[RfPedidoController::class,'procesoTerminado'])->name('rf_p_procesoterminado');
//rutas rf ventana
Route::get('rf_ev_docpedido',[RfEntegraVentanaController::class,'documentoPedido'])->name('rf_ev_docpedido');
Route::post('rf_ev_codcliente',[RfEntegraVentanaController::class,'codCliente'])->name('rf_ev_codcliente');
Route::post('rf_ev_detallepedido',[RfEntegraVentanaController::class,'detallePedido'])->name('rf_ev_detallepedido');
Route::get('rf_ev_articulo',[RfEntegraVentanaController::class,'articulo'])->name('rf_ev_articulo');
//rutas rf reingreso de artículos
Route::get('rf_ra_codarticulo',[RFReingresoController::class,'codigoArticulo'])->name('rf_ra_codarticulo');
Route::post('rf_ra_info',[RFReingresoController::class,'informacion'])->name('rf_ra_info');
