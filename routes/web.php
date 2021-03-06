<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/** Rutas para la Autenticacion **/
Auth::routes(['register'=>false]);



Route::get('prueba','PruebaController@listapersonas');

/** Rutas del modulo Administracion **/
Route::view('rol.config','configuracion/roles');

/** RF - MENU PRINCIPAL **/
Route::view('rf', 'rf/principal')->name('rf');

Route::get('/home', 'HomeController@index')->name('home');
