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

		/**
		 *
		 * Empresas
		 *
		 */
		require __DIR__ . '/routes/empresas.php';


		/**
		 *
		 * Clientes
		 *
		 */
		require __DIR__ . '/routes/clientes.php';


		/**
		 *
		 * Clientes
		 *
		 */
		require __DIR__ . '/routes/cartera.php';



		

		Route::get('nuevo-reporte', [
			'middleware' => 'auth',
			'as'   => 'nuevo.reporte', 
			'uses' => 'ContactoController@NuevoReporte'
			]);
		Route::post('nuevo-reporte', [
			'middleware' => 'auth',
			'as'   => 'nuevo.reporte', 
			'uses' => 'ContactoController@SaveReporte'
			]);
	//GetReporte
		Route::get('get-reportes', [
			'middleware' => 'auth',
			'as'   => 'get.reporte', 
			'uses' => 'ContactoController@GetReporte'
			]);
		
		/**
		 *
		 * Anotaciones
		 *
		 */
		require __DIR__ . '/routes/anotaciones.php';
		/**
		 *
		 * Servicios
		 *
		 */

		require __DIR__ . '/routes/servicios.php';
		/**
		 *
		 * Servicios
		 *
		 */

		require __DIR__ . '/routes/costos.php';


		/**
		 *
		 * Usuarios
		 *
		 */
		require __DIR__ . '/routes/usuarios.php';

	/**
		 *
		 * Usuarios
		 *
		 */


	require __DIR__ . '/routes/crm.php';

	require __DIR__ . '/routes/documentos.php';

	require __DIR__ . '/routes/configuracion.php';

	require __DIR__ . '/routes/mi_cuenta.php';


	
});