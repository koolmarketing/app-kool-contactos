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

Route::auth();

// Route::get('/home', 'HomeController@index');
// Route::get('/clientes','ContactoController@Clientes');
// Route::get('/empresas','ContactoController@Empresas');
// Route::get('/cliente/{id}','ContactoController@PerfilCliente');
// Route::get('/empresa/{id}','ContactoController@PerfilEmpresa');
// Route::get('/nuevo-contacto','ContactoController@NewContact');
// Route::get('/nueva-empresa','ContactoController@NewCompany');


Route::group(['prefix' => '/', 'middleware' => 'web'], function()
{ 
		

	Route::get('', [
		'as'   => 'home', 
		'uses' => 'HomeController@index'
		]);
	Route::post('guardar_empresa', [
		'as'   => 'home', 
		'uses' => 'ContactoController@SaveCompany'
		]);
	Route::get('clientes', [
		'as'   => 'clientes.list', 
		'uses' => 'ContactoController@Clientes'
		]);
	Route::get('empresas', [
		'as'   => 'empresas.index', 
		'uses' => 'RateLanguageController@getAllLanguages'
		]);
	Route::get('empresa/{id}', [
		'as'   => 'empresas.id', 
		'uses' => 'RateLanguageController@update'
		]);
	Route::get('nuevo-contacto', [
		'as'   => 'nuevo.contacto', 
		'uses' => 'ContactoController@NewContact'
		]);
	Route::get('nueva-empresa', [
		'as'   => 'nuevo.empresa', 
		'uses' => 'ContactoController@NewCompany'
		]);
});