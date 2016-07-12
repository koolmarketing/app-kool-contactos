<?php  

Route::get('documentos', [
	'middleware' => 'auth',
	'as'   => 'index.crm', 
	'uses' => 'DocumentosController@index'
	]);


?>