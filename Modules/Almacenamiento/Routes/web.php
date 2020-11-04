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
