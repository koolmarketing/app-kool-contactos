<?php 

Route::get('load-cartera/{id}', [
	'middleware' => 'auth',
	'as'   => 'load.cartera', 
	'uses' => 'CarteraController@ModalCartera'
	]);

/*
*
*
*
*
*
*/

?>