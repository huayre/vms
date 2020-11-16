<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::view('mantencion_documento','recepcion::mantencion_documento.index')->name('mantencion_documento');
Route::view('detalle_documento','recepcion::mantencion_documento.detalle')->name('detalle_documento');
Route::view('modifica_recepcionado','recepcion::modifica_recepcionado.index')->name('modifica_recepcionado');
Route::view('hoja_trabajo','recepcion::hoja_trabajo.index')->name('hoja_trabajo');
Route::view('carga_transporte','recepcion::carga_transporte.index')->name('carga_transporte');
