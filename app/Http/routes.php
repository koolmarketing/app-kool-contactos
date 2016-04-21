<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
// 	return view('welcome');
// });



// Route::get('/home', 'HomeController@index');
// Route::get('/clientes','ContactoController@Clientes');
// Route::get('/empresas','ContactoController@Empresas');
// Route::get('/cliente/{id}','ContactoController@PerfilCliente');
// Route::get('/empresa/{id}','ContactoController@PerfilEmpresa');
// Route::get('/nuevo-contacto','ContactoController@NewContact');
// Route::get('/nueva-empresa','ContactoController@NewCompany');


Route::group(['prefix' => '/', 'middleware' => 'web'], function()
{ 
	Route::auth();

	Route::get('', [
		'middleware' => 'auth',
		'as'   => 'home', 
		'uses' => 'HomeController@index'
		]);
	Route::post('guardar_empresa', [
		'middleware' => 'auth',
		'as'   => 'home', 
		'uses' => 'ContactoController@SaveCompany'
		]);
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
	Route::get('empresas', [
		'middleware' => 'auth',
		'as'   => 'empresas.index', 
		'uses' => 'ContactoController@Empresas'
		]);
	Route::get('cliente/{id}', [
		'middleware' => 'auth',
		'as'   => 'clientes.id', 
		'uses' => 'ContactoController@PerfilCliente'
		]);
	Route::get('empresa/{id}', [
		'middleware' => 'auth',
		'as'   => 'empresas.id', 
		'uses' => 'ContactoController@Empresa'
		]);
	Route::get('nuevo-contacto', [
		'middleware' => 'auth',
		'as'   => 'nuevo.contacto', 
		'uses' => 'ContactoController@NewContact'
		]);
	Route::get('nueva-empresa', [
		'middleware' => 'auth',
		'as'   => 'nuevo.empresa', 
		'uses' => 'ContactoController@NewCompany'
		]);
});