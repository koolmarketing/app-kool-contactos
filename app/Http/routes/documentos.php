<?php  

Route::get('documentos', [
	'middleware' => 'auth',
	'as'   => 'index_panel_documentos', 
	'uses' => 'DocumentosController@index'
	]);

Route::post('guardar_documento_cliente', [
	'middleware' => 'auth',
	'as'         => 'guardar_documentos', 
	'uses'       => 'DocumentosController@GuardarDocumentoEmpresa'
	]);

Route::get('documentos_empresa_perfil/{id}', [
	'middleware' => 'auth',
	'as'   => 'documentos_perfil', 
	'uses' => 'DocumentosController@AllDocuments'
	]);


?>