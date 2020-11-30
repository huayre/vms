<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventario\Http\Controllers\RfInventarioGeneralController;
use Modules\Inventario\Http\Controllers\RfInventarioGuiadoController;
Route::prefix('inventario')->group(function() {
    Route::get('toma_inventario', 'InventarioController@toma_inventario')->name('inventario.toma_inventario');
});

Route::prefix('inventario')->group(function() {
    Route::get('consulta_ti', 'InventarioController@getTi')->name('inventario.consulta_ti');
});

Route::prefix('inventario')->group(function() {
    Route::get('diferencias_ti', 'InventarioController@diferenciasTi')->name('inventario.diferencias_ti');
});

Route::prefix('inventario')->group(function() {
    Route::get('xtek_mims', 'InventarioController@xtek_mims')->name('inventario.xtek_mims');
});

//rf inventario
Route::view('rf_inventario','inventario::rf.inventario.opciones')->name('rf_inventario');
//inventario general y ubicaciones
Route::get('rf_ig_numinventario',[RfInventarioGeneralController::class,'numeroInventario'])->name('rf_ig_numinventario');
Route::post('rf_ig_ubgfisica',[RfInventarioGeneralController::class,'ubicacionFisica'])->name('rf_ig_ubgfisica');
Route::post('rf_ig_articulo',[RfInventarioGeneralController::class,'articulo'])->name('rf_ig_articulo');
Route::post('rf_ig_confirmacion',[RfInventarioGeneralController::class,'confirmacion'])->name('rf_ig_confirmacion');
Route::get('rf_ig_acepta',[RfInventarioGeneralController::class,'aceptar'])->name('rf_ig_acepta');
Route::get('rf_ig_rechaza',[RfInventarioGeneralController::class,'rechaza'])->name('rf_ig_rechaza');
//inventario guiado
Route::get('rf_igui_numinventario',[RfInventarioGuiadoController::class,'numeroInventario'])->name('rf_igui_numinventario');
Route::post('rf_igui_ubgfisica',[RfInventarioGuiadoController::class,'ubicacionFisica'])->name('rf_igui_ubgfisica');
Route::post('rf_igui_info',[RfInventarioGuiadoController::class,'informacion'])->name('rf_igui_info');
Route::post('rf_igui_ubgfisicaconfirmacion',[RfInventarioGuiadoController::class,'ubicacionFisicaConfirmacion'])->name('rf_igui_ubgfisicaconfirmacion');
Route::post('rf_igui_articulo',[RfInventarioGuiadoController::class,'articulo'])->name('rf_igui_articulo');
