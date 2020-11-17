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
Route::view('descarga_transporte','recepcion::descarga_transporte.index')->name('descarga_transporte');
Route::view('waybills','recepcion::estado_waybills.index')->name('waybills');
Route::view('diferencia_transporte','recepcion::diferencia_transporte.index')->name('diferencia_transporte');
Route::view('dife_ingreso_recepción','recepcion::dife_ingreso_recepción.index')->name('dife_ingreso_recepción');
Route::view('estado_transito','recepcion::estado_transito.index')->name('estado_transito');
