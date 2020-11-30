<?php

use Illuminate\Support\Facades\Route;

use  Modules\Almacenamiento\Http\Controllers\RfAlmacenajeController;
use  Modules\Almacenamiento\Http\Controllers\RfDevolucionesController;
use  Modules\Almacenamiento\Http\Controllers\RfReubicacionNormalController;
use  Modules\Almacenamiento\Http\Controllers\RfReubicacionMasivaController;

Route::prefix('almacenaje')->group(function() {
    Route::get('ubicaciones', 'AlmacenamientoController@admin_ubicacion')->name('almacenaje.ubicaciones');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('mapa', 'AlmacenamientoController@mapa')->name('almacenaje.mapa');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('stock_articulo', 'AlmacenamientoController@stock_articulo')->name('almacenaje.stock_articulo');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('stock_general', 'AlmacenamientoController@stock_general')->name('almacenaje.stock_general');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('ubicaciones_disponibles', 'AlmacenamientoController@ubicaciones_disponibles')->name('almacenaje.ubicaciones_disponibles');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('ubicaciones_usadas', 'AlmacenamientoController@ubicaciones_usadas')->name('almacenaje.ubicaciones_usadas');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('ubicaciones_articulos', 'AlmacenamientoController@ubicaciones_articulos')->name('almacenaje.ubicaciones_articulos');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('ctac_articulo', 'AlmacenamientoController@ctacte_articulo')->name('almacenaje.ctac_articulo');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('ctac_ubicaciones', 'AlmacenamientoController@ctacte_ubicaciones')->name('almacenaje.ctac_ubicaciones');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('ctac_cliente', 'AlmacenamientoController@ctacte_cliente')->name('almacenaje.ctac_cliente');
});

Route::prefix('almacenaje')->group(function() {
    Route::get('movimiento_mensual', 'AlmacenamientoController@movimiento_mensual')->name('almacenaje.movimiento_mensual');
});


//rutas rf almacenamiento
Route::view('rf_almacenamiento','almacenaje::rf.almacenaje.opciones')->name('rf_almacenamiento');
//rf almacenaje
Route::get('rf_a_codigobulto',[RfAlmacenajeController::class,'codigoBulto'])->name('rf_a_codigobulto');
Route::post('rf_a_articulo',[RfAlmacenajeController::class,'articulo'])->name('rf_a_articulo');
Route::post('rf_a_info',[RfAlmacenajeController::class,'informacion'])->name('rf_a_info');
Route::post('rf_a_ubicacionfisica',[RfAlmacenajeController::class,'ubicacion'])->name('rf_a_ubicacionfisica');
Route::post('rf_a_infook',[RfAlmacenajeController::class,'InfoOK'])->name('rf_a_infook');
Route::post('rf_a_finproceso',[RfAlmacenajeController::class,'finProceso'])->name('rf_a_finproceso');
//rf devoluciones.
Route::get('rf_d_numdocumento',[RfDevolucionesController::class,'numDocumento'])->name('rf_d_numdocumento');
Route::post('rf_d_articulo',[RfDevolucionesController::class,'articulo'])->name('rf_d_articulo');
Route::post('rf_d_info',[RfDevolucionesController::class,'informacion'])->name('rf_d_info');
Route::post('rf_d_ubicacionfisica',[RfDevolucionesController::class,'ubicacionFisica'])->name('rf_d_ubicacionfisica');
Route::post('rf_d_infook',[RfDevolucionesController::class,'informacionOK'])->name('rf_d_infook');
Route::post('rf_d_preguntaproceso',[RfDevolucionesController::class,'preguntaProceso'])->name('rf_d_preguntaproceso');

//rutas rf reubicación
Route::view('rf_reubicacion','almacenaje::rf.reubicacionproductos.opciones')->name('rf_reubicacion');
//ff reubicación normal
Route::get('rf_rn_codigo_ubicacion',[RfReubicacionNormalController::class,'codigoUbicacion'])->name('rf_rn_codigo_ubicacion');
Route::post('rf_rn_codigo_articulos',[RfReubicacionNormalController::class,'codigoArticulo'])->name('rf_rn_codigo_articulos');
Route::post('rf_rn_tipostock',[RfReubicacionNormalController::class,'tipoStock'])->name('rf_rn_tipostock');
Route::post('rf_rn_cantidadarticulo',[RfReubicacionNormalController::class,'cantidadArticulo'])->name('rf_rn_cantidadarticulo');
Route::post('rf_rn_nuevaubicacion',[RfReubicacionNormalController::class,'nuevaUbicacion'])->name('rf_rn_nuevaubicacion');
Route::post('rf_rn_informacion',[RfReubicacionNormalController::class,'informacion'])->name('rf_rn_informacion');

//rf reubicación masiva (Retirar)
Route::get('rf_rm_opciones',[RfReubicacionMasivaController::class,'opciones'])->name('rf_rm_opciones');
Route::post('rf_rm_decision',[RfReubicacionMasivaController::class,'decision'])->name('rf_rm_decision');
Route::post('rf_rm_codarticulo',[RfReubicacionMasivaController::class,'codigoArticulo'])->name('rf_rm_codarticulo');
Route::post('rf_rm_tipostock',[RfReubicacionMasivaController::class,'codigoStock'])->name('rf_rm_tipostock');
Route::post('rf_rm_cantidadarticulo',[RfReubicacionMasivaController::class,'CantidadArticulo'])->name('rf_rm_cantidadarticulo');
Route::post('rf_rm_info',[RfReubicacionMasivaController::class,'informacion'])->name('rf_rm_info');

//rf reubicación masiva (Ubicar)
Route::post('rf_rmu_tipostock',[RfReubicacionMasivaController::class,'tipoStock'])->name('rf_rmu_tipostock');
Route::post('rf_rmu_codubicacion',[RfReubicacionMasivaController::class,'codUbicacion'])->name('rf_rmu_codubicacion');
Route::post('rf_rmu_cantidadarticulo',[RfReubicacionMasivaController::class,'cantidadArticulo1'])->name('rf_rmu_cantidadarticulo');
Route::post('rf_rmu_informacion',[RfReubicacionMasivaController::class,'informacion1'])->name('rf_rmu_informacion');
