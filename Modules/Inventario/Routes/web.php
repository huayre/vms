<?php

use Illuminate\Support\Facades\Route;

Route::prefix('inventario')->group(function() {
    Route::get('toma_inventario', 'InventarioController@toma_inventario')->name('inventario.toma_inventario');
});

Route::prefix('inventario')->group(function() {
    Route::get('consulta_ti', 'InventarioController@getTi')->name('inventario.consulta_ti');
});

Route::prefix('inventario')->group(function() {
    Route::get('diferencias_ti', 'InventarioController@diferenciasTi')->name('inventario.diferencias_ti');
});

Route::prefix('inventario')->group(function() {
    Route::get('xtek_mims', 'InventarioController@xtek_mims')->name('inventario.xtek_mims');
});
