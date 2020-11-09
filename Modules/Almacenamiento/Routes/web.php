<?php

use Illuminate\Support\Facades\Route;

Route::prefix('almacenamiento')->group(function() {
    Route::get('ubicaciones', 'AlmacenamientoController@admin_ubicacion')->name('almacenamiento.ubicaciones');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('mapa', 'AlmacenamientoController@mapa')->name('almacenamiento.mapa');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('stock_articulo', 'AlmacenamientoController@stock_articulo')->name('almacenamiento.stock_articulo');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('stock_general', 'AlmacenamientoController@stock_general')->name('almacenamiento.stock_general');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('ubicaciones_disponibles', 'AlmacenamientoController@ubicaciones_disponibles')->name('almacenamiento.ubicaciones_disponibles');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('ubicaciones_usadas', 'AlmacenamientoController@ubicaciones_usadas')->name('almacenamiento.ubicaciones_usadas');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('ubicaciones_articulos', 'AlmacenamientoController@ubicaciones_articulos')->name('almacenamiento.ubicaciones_articulos');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('ctac_articulo', 'AlmacenamientoController@ctacte_articulo')->name('almacenamiento.ctac_articulo');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('ctac_ubicaciones', 'AlmacenamientoController@ctacte_ubicaciones')->name('almacenamiento.ctac_ubicaciones');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('ctac_cliente', 'AlmacenamientoController@ctacte_cliente')->name('almacenamiento.ctac_cliente');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('movimiento_mensual', 'AlmacenamientoController@movimiento_mensual')->name('almacenamiento.movimiento_mensual');
});