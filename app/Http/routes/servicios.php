<?php	

Route::post('adjuntar-servicio', [
	'middleware' => 'auth',
	'as'   => 'guardar.servicio', 
	'uses' => 'ServiciosController@SaveService'
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



	?>