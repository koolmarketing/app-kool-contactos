<?php

Route::post('guardar_cliente',[
	'middleware' => 'auth',
	'as'   => 'guardar_cliente',
	'uses' => 'ContactoController@GuardarClientes'
	]);
Route::get('clientes', [
	'middleware' => 'auth',
	'as'   => 'clientes.list', 
	'uses' => 'ContactoController@Clientes'
	]);

Route::get('cliente/{id}', [
	'middleware' => 'auth',
	'as'   => 'clientes.id', 
	'uses' => 'ContactoController@PerfilCliente'
	]);

Route::get('nuevo-contacto', [
	'middleware' => 'auth',
	'as'   => 'nuevo.contacto', 
	'uses' => 'ContactoController@NewContact'
	]);



	?>