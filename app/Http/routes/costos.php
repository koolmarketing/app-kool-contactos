<?php	

Route::post('adjuntar-costo', [
	'middleware' => 'auth',
	'as'   => 'guardar.costo', 
	'uses' => 'CostosController@SaveCosto'
	]);

Route::get('empresa/costo_imprimir/all/{id}', [
	'middleware' => 'auth',
	'as'   => 'empresa.costo.all', 
	'uses' => 'CostosController@All'
	]);

Route::get('empresa/imprimir/saldo_costo/{id}', [
	'middleware' => 'auth',
	'as'   => 'saldo.costo.empresa', 
	'uses' => 'CostosController@Saldo'
	]);


Route::post('update/comprobante_costo', [
	'middleware' => 'auth',
	'as'   => 'update.comprobante_costo', 
	'uses' => 'CostosController@UpdateComprobanteCosto'
	]);


	?>