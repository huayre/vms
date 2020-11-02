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