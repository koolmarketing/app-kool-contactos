<?php 

Route::get('load-cartera/{id}', [
	'middleware' => 'auth',
	'as'   => 'load.cartera', 
	'uses' => 'CarteraController@ModalCartera'
	]);

Route::get('calcular_recaudo/{id}',[
	'middleware' => 'auth',
	'as'   => 'load.valores', 
	'uses' => 'CarteraController@Calcular_Recaudo'
	]);

/*
*
*
*
*
*
*/

?>