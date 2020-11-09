<?php

use Illuminate\Support\Facades\Route;

Route::prefix('etiqueta')->group(function() {
    Route::get('usuarios', 'EtiquetaController@usuarios')->name('etiqueta.usuarios');
});

Route::prefix('etiqueta')->group(function() {
    Route::get('ubicaciones', 'EtiquetaController@ubicaciones')->name('etiqueta.ubicaciones');
});

Route::prefix('etiqueta')->group(function() {
    Route::get('bultos', 'EtiquetaController@bultos')->name('etiqueta.bultos');
});