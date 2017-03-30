<?php
 

Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('logout','HomeController@logout');


// Recursos de la aplicación
Route::resource('home', 'HomeController');

Route::resource('viajero', 'ViajeroController');

Route::resource('pago', 'PagoController');

Route::resource('paquete', 'PaqueteController');




// Mostrar detalles del viajero
Route::get('/viajero/detalles/{id}','HomeController@showDetalles');

// Ordenar lista de viajeros por su número de cédula
Route::get('/viajero/orden/cedula', 'ViajeroController@byCedula');

// Ordenar lista de viajeros por su número de paquete de viaje
Route::get('/viajero/orden/paquete', 'ViajeroController@byPaquete');

// Ordenar lista de viajeros por su estado de viaje
Route::get('/viajero/orden/estado', 'ViajeroController@byEstado');

// Ordenar lista de viajeros por su tipo de sexo
Route::get('/viajero/orden/sexo', 'ViajeroController@bySexo');

// Ordenar lista de viajeros por su edad
Route::get('/viajero/orden/edad', 'ViajeroController@byEdad');

/*********************************************************************** 
   Se elimina los recursos por medio de las siguientes rutas 
   debido a que se hace uso de javascript primero para conocer
   el item seleccionado (id) y evitando usar ajax, no podremos
   enviar la ruta con su método (PUT) desde javascript.
 */
Route::get('/viajero/{id}/delete', 'ViajeroController@destroy');

Route::get('/pago/{id}/delete', 'PagoController@destroy');

Route::get('/paquete/{id}/delete', 'PaqueteController@destroy');
/***********************************************************************/





// Ordenar lista de pagos por los siguientes elementos
Route::get('pago/orden/cedula','PagoController@byCedula');

Route::get('pago/orden/descripcion','PagoController@byDescripcion');

Route::get('pago/orden/monto','PagoController@byMonto');

Route::get('pago/orden/metodo','PagoController@byMetodo');




// Exportar archivo excel
Route::get('/config/page/excel', 'FanPageController@excel');

// Exportar archivor excel por el id de viajero (no implmentado aun)

Route::get('/config/page/excel/{id}', 'FanPageController@oneExcel');

// Registrar pago por número de cédula del viajero
Route::get('pago/create/{cedula}/{id}', 'PagoController@createByCedula');

// Setear el estado de pago del viajero
Route::get('/viajero/estado/{id}', 'ViajeroController@setEstadoViajero');

// Registrar usuario desde una cuenta de desarrollador del sitio web
Route::get('/admin/register','HomeController@register');
