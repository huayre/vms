<?php
use Illuminate\Support\Facades\Route;

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