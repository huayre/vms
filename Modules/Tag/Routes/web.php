<?php

use Illuminate\Support\Facades\Route;

Route::prefix('tag')->group(function() {
    Route::get('/', 'TagController@index');
});

Route::prefix('tag')->group(function() {
    Route::get('usuarios', 'TagController@usuarios')->name('tag.usuarios');
});

Route::prefix('tag')->group(function() {
    Route::get('ubicaciones', 'TagController@ubicaciones')->name('tag.ubicaciones');
});

Route::prefix('tag')->group(function() {
    Route::get('bultos', 'TagController@bultos')->name('tag.bultos');
});