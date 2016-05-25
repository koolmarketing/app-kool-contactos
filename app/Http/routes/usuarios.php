
<?php
Route::get('usuarios', [
			'middleware' => 'auth',
			'as'   => 'ver.reporte', 
			'uses' => 'ConfiguracionController@ListaUsuarios'
			]);
		Route::get('activar_usuario/{id}', [
			'middleware' => 'auth',
			'as'   => 'activar.usuario', 
			'uses' => 'ConfiguracionController@ActivarUsuario'
			]);
		Route::get('desactivar_usuario/{id}', [
			'middleware' => 'auth',
			'as'   => 'desactivar.usuario', 
			'uses' => 'ConfiguracionController@DesactivarUsuario'
			]);

			?>