<?php

use Illuminate\Support\Facades\Route;

Route::prefix('etiqueta')->group(function() {
    Route::get('/', 'EtiquetaController@index');
});

Route::prefix('etiqueta')->group(function() {
    Route::get('/usuarios', 'EtiquetaController@usuarios');
});

Route::prefix('etiqueta')->group(function() {
    Route::get('/ubicaciones', 'EtiquetaController@ubicaciones');
});

Route::prefix('etiqueta')->group(function() {
    Route::get('/bultos', 'EtiquetaController@bultos');
});