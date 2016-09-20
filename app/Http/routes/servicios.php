<?php	

Route::post('adjuntar-servicio', [
	'middleware' => ['auth','validarservicio'],
	'as'   => 'guardar.servicio', 
	'uses' => 'ServiciosController@SaveService'
	]);

Route::post('actualizar-servicio', [
	'middleware' => ['auth','validarservicio'],
	'as'   => 'actualizar.servicio', 
	'uses' => 'ServiciosController@UpdateService'
	]);

Route::get('empresa/servicios_imprimir/all/{id}', [
	'middleware' => 'auth',
	'as'   => 'empresa.servicios.all', 
	'uses' => 'ServiciosController@All'
	]);

Route::get('empresa/imprimir/saldo/{id}', [
	'middleware' => 'auth',
	'as'   => 'saldo.empresa', 
	'uses' => 'ServiciosController@Saldo'
	]);


Route::post('update/comprobante_servicio', [
	'middleware' => 'auth',
	'as'   => 'update.comprobante_servicio', 
	'uses' => 'ServiciosController@UpdateComprobanteServicio'
	]);


	?>