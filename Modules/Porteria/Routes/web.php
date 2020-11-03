<?php
use \Illuminate\Support\Facades\Route;
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
Route::view('entrada_salida','porteria::entrada_salida.index')->name('entrada_salida');
Route::view('mantencion_transporte','porteria::mantencion_transporte.index')->name('mantencion_transporte');
Route::view('crear_transportista','porteria::transportista.crear')->name('crear_transportista');
Route::view('impri_document_transporte','porteria::impri_document_transporte.index')->name('impri_document_transporte');
Route::view('movimiento_vehiculo','porteria::movimiento_vehiculo.index')->name('movimiento_vehiculo');
