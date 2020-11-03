<?php
use Illuminate\Support\Facades\Route;

Route::prefix('despacho')->group(function() {
    Route::get('/', 'DespachoController@index');
});

Route::prefix('despacho')->group(function() {
    Route::get('/pedido', 'PedidoController@index');
});

Route::prefix('despacho')->group(function() {
    Route::get('/asignacion', 'PedidoController@asignacion');
});

Route::prefix('despacho')->group(function() {
    Route::get('/preparacion', 'PedidoController@preparacion');
});

Route::prefix('despacho')->group(function() {
    Route::get('/entrega_ventana', 'PedidoController@entrega_ventana');
});

Route::prefix('despacho')->group(function() {
    Route::get('/no_catalogados', 'PedidoController@entrega_nocatalogados');
});

Route::prefix('despacho')->group(function() {
    Route::get('/picking', 'PedidoController@picking');
});

Route::prefix('despacho')->group(function() {
    Route::get('/conciliacion_despacho', 'PedidoController@conciliacion_despacho');
});

Route::prefix('despacho')->group(function() {
    Route::get('/reingreso_articulos', 'PedidoController@reingreso_articulos');
});