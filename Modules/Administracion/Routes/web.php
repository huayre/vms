<?php
use Illuminate\Support\Facades\Route;

Route::view('roles','administracion::roles.index')->name('roles');
Route::view('usuarios','administracion::usuarios.index')->name('usuarios');
Route::view('permisos_terminal','administracion::permisos_terminal.index')->name('permisos_terminal');
Route::view('permisos_menu','administracion::permisos_menu.index')->name('permisos_menu');
Route::view('articulos','administracion::articulos.index')->name('articulos');
Route::view('cod_barra','administracion::codigo_barras.index')->name('cod_barra');
