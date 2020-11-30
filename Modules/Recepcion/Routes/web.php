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
use Modules\Recepcion\Http\Controllers\RfRecepcionController;
use Modules\Recepcion\Http\Controllers\RfTransporte;
use Modules\Recepcion\Http\Controllers\RFIngresosnegativos;

Route::view('mantencion_documento','recepcionarticulos::mantencion_documento.index')->name('mantencion_documento');
Route::view('detalle_documento','recepcionarticulos::mantencion_documento.detalle')->name('detalle_documento');
Route::view('modifica_recepcionado','recepcionarticulos::modifica_recepcionado.index')->name('modifica_recepcionado');
Route::view('hoja_trabajo','recepcionarticulos::hoja_trabajo.index')->name('hoja_trabajo');
Route::view('carga_transporte','recepcionarticulos::carga_transporte.index')->name('carga_transporte');
Route::view('descarga_transporte','recepcionarticulos::descarga_transporte.index')->name('descarga_transporte');
Route::view('waybills','recepcionarticulos::estado_waybills.index')->name('waybills');
Route::view('diferencia_transporte','recepcionarticulos::diferencia_transporte.index')->name('diferencia_transporte');
Route::view('dife_ingreso_recepción','recepcionarticulos::dife_ingreso_recepción.index')->name('dife_ingreso_recepción');
Route::view('estado_transito','recepcionarticulos::estado_transito.index')->name('estado_transito');

//fF OPCIONES RECEPCIÓN
Route::view('rf_recepcion','recepcionarticulos::rf.recepcion.opciones')->name('rf_recepcion');
//RF RECEPCIÓN DE ARTÍCULOS
Route::get('rf_orden_compra',[RfRecepcionController::class ,'recepcion'])->name('rf_orden_compra');
Route::post('rf_recepcion_orden',[RfRecepcionController::class ,'ordenCompra'])->name('rf_recepcion_orden');
Route::post('rf_guia_despacho',[RfRecepcionController::class ,'GuiaDespacho'])->name('rf_guia_despacho');
Route::post('rf_codigo_bulto',[RfRecepcionController::class ,'codigoBulto'])->name('rf_codigo_bulto');
Route::post('rf_articulo',[RfRecepcionController::class ,'Articulo'])->name('rf_articulo');
//RF CARGA BULTOS A TRANSPORTE
Route::get('rf_carga_bulto_transporte',[RfTransporte::class ,'transporte'])->name('rf_carga_bulto_transporte');
Route::post('rf_cod_transporte',[RfTransporte::class ,'codigoTransporte'])->name('rf_cod_transporte');
Route::post('rf_cod_transportista',[RfTransporte::class ,'codigoTransportista'])->name('rf_cod_transportista');
Route::post('rf_cod_bulto',[RfTransporte::class ,'codigoBulto'])->name('rf_cod_bulto');
Route::view('nuevo_bulto','recepcionarticulos::rf.recepcion.transporte.3codbulto')->name('nuevo_bulto');
//RF INGRESOS NEGATIVOS
Route::get('rf_n_ingresos_negativos',[RFIngresosnegativos::class,'ingresosNegativos'])->name('rf_n_ingresos_negativos');
Route::post('rf_n_orden_compra',[RFIngresosnegativos::class,'Ordencompra'])->name('rf_n_orden_compra');
Route::post('rf_n_num_item',[RFIngresosnegativos::class,'NumeroItem'])->name('rf_n_num_item');
Route::post('rf_n_cod_ubicacion',[RFIngresosnegativos::class,'CodigoUbicacion'])->name('rf_n_cod_ubicacion');
Route::post('rf_n_cantidad_rebajar',[RFIngresosnegativos::class,'cantidadRebajar'])->name('rf_n_cantidad_rebajar');
Route::view('rf_confirmar_ingreso_negativo','recepcionarticulos::rf.recepcion.ingresosnegativos.1ordencompra')->name('rf_confirmar_ingreso_negativo');
