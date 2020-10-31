<?php
use Illuminate\Support\Facades\Route;

Route::view('roles','administracion::roles.index')->name('roles');
Route::view('usuarios','administracion::usuarios.index')->name('usuarios');
Route::view('permisos_terminal','administracion::permisos.index')->name('permisos_terminal');
