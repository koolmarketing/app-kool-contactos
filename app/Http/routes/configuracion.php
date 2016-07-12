<?php
Route::get('mi_cuenta', [
	'middleware' => 'auth',
	'as'   => 'index.crm', 
	'uses' => 'MiCuentaController@Index'
	]);
?>