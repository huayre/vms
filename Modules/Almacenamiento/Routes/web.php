<?php

use Illuminate\Support\Facades\Route;

Route::prefix('almacenamiento')->group(function() {
    Route::get('/', 'AlmacenamientoController@index');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/ubicaciones', 'AlmacenamientoController@admin_ubicacion');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/mapa', 'AlmacenamientoController@mapa');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/stock_articulo', 'AlmacenamientoController@stock_articulo');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/stock_general', 'AlmacenamientoController@stock_general');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/ubicaciones_disponibles', 'AlmacenamientoController@ubicaciones_disponibles');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/ubicaciones_usadas', 'AlmacenamientoController@ubicaciones_usadas');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/ubicaciones_articulos', 'AlmacenamientoController@ubicaciones_articulos');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/ctac_articulo', 'AlmacenamientoController@ctacte_articulo');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/ctac_ubicaciones', 'AlmacenamientoController@ctacte_ubicaciones');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/ctac_cliente', 'AlmacenamientoController@ctacte_cliente');
});

Route::prefix('almacenamiento')->group(function() {
    Route::get('/movimiento_mensual', 'AlmacenamientoController@movimiento_mensual');
});