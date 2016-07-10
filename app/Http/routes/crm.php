<?php


Route::get('crm', [
	'middleware' => 'auth',
	'as'   => 'index.crm', 
	'uses' => 'CRMController@index'
	]);
Route::get('crm/oportunidad', [
	'middleware' => 'auth',
	'as'   => 'index.crm', 
	'uses' => 'CRMController@ViewOportunidad'
	]);



?>