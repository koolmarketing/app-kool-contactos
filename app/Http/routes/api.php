<?php

//return App\User::all();

Route::get('api/all-anotaciones', [
	'middleware' => 'auth',
	'as'   => 'anotaciones.empresa', 
	'uses' => 'ApiController@AllAnotaciones'
	]);

Route::get('card/{inicio}/{fin}', [
	'middleware' => 'auth',
	'as'   => 'anotaciones_empresa_fecha', 
	'uses' => 'ApiAsteroidController@FiltroFecha'
	]);

Route::get('api/card/{id}', [
	'middleware' => 'auth',
	'as'   => 'card.id', 
	'uses' => 'ApiController@ShowCard'
	]);
Route::post('api/update/note/{id}',[
	'middleware' => 'auth',
	'as'   => 'card.update', 
	'uses' => 'AnotacionesController@UpdateAnotacion'
	]);

Route::get('api/recaudo',[
'middleware' => 'auth',
'as' => 'all.recaudo',
'uses' => 'ApiAsteroidController@GetRecaudo'
	]);
Route::get('api/finanzas',[
'middleware' => 'auth',
'as' => 'all.finanzas',
'uses' => 'ApiAsteroidController@GetFinanzas'
	]);

Route::patch('/card/{id}', ['as' => 'card.update', 'uses'=>'ApiAsteroidController@update']);
Route::resource('card', 'ApiAsteroidController');
