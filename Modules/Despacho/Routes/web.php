<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
