<?php

use Illuminate\Support\Facades\Route;

Route::prefix('inventario')->group(function() {
    Route::get('/', 'InventarioController@index');
});

Route::prefix('inventario')->group(function() {
    Route::get('/toma_inventario', 'InventarioController@toma_inventario');
});

Route::prefix('inventario')->group(function() {
    Route::get('/consulta_ti', 'InventarioController@getTi');
});

Route::prefix('inventario')->group(function() {
    Route::get('/diferencias_ti', 'InventarioController@diferenciasTi');
});

Route::prefix('inventario')->group(function() {
    Route::get('/xtek_mims', 'InventarioController@xtek_mims');
});
