<?php
Route::group(['middleware' => 'web'], function()
{
	
	Route::post('actualizar_password', [
		'middleware' => 'auth',
		'as'   => 'actualizar.password', 
		'uses' => 'MiCuentaController@UpdatePassword'
		]);

	Route::post('actualizar_image', [
		'middleware' => 'auth',
		'as'   => 'actualizar.password', 
		'uses' => 'MiCuentaController@UpdateImage'
		]);

});



?>