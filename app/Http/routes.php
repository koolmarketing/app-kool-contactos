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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get('/clientes','ContactoController@Clientes');
Route::get('/empresas','ContactoController@Empresas');

Route::get('/cliente/{id}','ContactoController@PerfilCliente');
Route::get('/empresa/{id}','ContactoController@PerfilEmpresa');
Route::get('/nuevo-contacto','ContactoController@NewContact');

Route::get('/nueva-empresa','ContactoController@NewCompany');


