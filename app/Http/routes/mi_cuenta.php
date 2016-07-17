<?php

Route::post('actualizar_password', [
	'middleware' => 'auth',
	'as'   => 'actualizar.password', 
	'uses' => 'MiCuentaController@UpdatePassword'
	]);

?>