<?php

Route::post('guardar_empresa', [
	'middleware' => 'auth',
	'as'   => 'home', 
	'uses' => 'ContactoController@SaveCompany'
	]);

Route::get('empresas', [
	'middleware' => 'auth',
	'as'   => 'empresas.index', 
	'uses' => 'ContactoController@Empresas'
	]);


Route::get('empresa/{id}', [
	'middleware' => 'auth',
	'as'   => 'empresas.id', 
	'uses' => 'ContactoController@Empresa'
	]);

Route::get('nueva-empresa', [
	'middleware' => 'auth',
	'as'   => 'nuevo.empresa', 
	'uses' => 'ContactoController@NewCompany'
	]);

	?>