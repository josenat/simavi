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


Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('logout','HomeController@logout');



Route::resource('home', 'HomeController');

Route::resource('viajero', 'ViajeroController');

Route::resource('pago', 'PagoController');

Route::resource('paquete', 'PaqueteController');



Route::get('/config/page/excel', 'FanPageController@excel');

Route::get('/config/page/excel/{id}', 'FanPageController@oneExcel');

Route::get('pago/ced/{cedula}/{id}', 'PagoController@createByCedula');

Route::get('/viajero/est/{id}', 'ViajeroController@setEstadoViajero');





