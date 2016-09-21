<?php

Route::post('nueva-anotacion', [
	'middleware' => ['auth','web','validarcartera','validarserial'],
	'as'   => 'guardar.anotacion', 
	'uses' => 'AnotacionesController@GuardarAnotacion'
	]);
Route::get('empresa/anotaciones_empresa/{id}', [
	'middleware' => 'auth',
	'as'   => 'anotaciones.empresa', 
	'uses' => 'AnotacionesController@print_anotacion_empresas'
	]);
Route::get('empresa/anotacion_imprimir_tipo/{id}', [
	'middleware' => 'auth',
	'as'   => 'anotaciones.anotacion_empresa_imprimir_tipo', 
	'uses' => 'AnotacionesController@all_anoaciones'
	]);



/*
*
*
*
*/

Route::get('anotaciones/empresa/contar-anotaciones', [
	'middleware' => 'auth', 
	'uses' => 'AnotacionesController@get_comentarios'
	]);

Route::get('anotaciones/empresa/contar-cobros', [
	'middleware' => 'auth', 
	'uses' => 'AnotacionesController@get_cobros'
	]);

Route::get('anotaciones/empresa/contar-alertas', [
	'middleware' => 'auth',
	'uses' => 'AnotacionesController@get_alertas'
	]);

Route::get('anotaciones/empresa/contar-recordatorios', [
	'middleware' => 'auth', 
	'uses' => 'AnotacionesController@get_recordatorios'
	]);

/*
*
*  Update Cartera
*
*/

Route::post('update/cobro', [
	'middleware' => ['auth','web','validarrecaudo'], 
	'uses' => 'AnotacionesController@updateCobro'
	]);

Route::post('update/cobro/comprobante', [
	'middleware' => ['auth','web'], 
	'uses' => 'AnotacionesController@updateCobroComprobante'
	]);

Route::post('filtrar/tarjetas', [
	'middleware' => ['auth','web'], 
	'uses' => 'TarjetasController@FiltrarTarjetasHome'
	]);


/**/

Route::post('get-calendar/tarjetas', [
	'middleware' => 'auth', 
	'uses' => 'TarjetasController@FiltrarTarjetasHome'
	]);

Route::post('get-calendar/tarjetas/home', [
	'middleware' => ['auth','web'],  
	'uses' => 'TarjetasController@GetFiltarTarjeta'
	]);
	?>





