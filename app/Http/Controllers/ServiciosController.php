<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\Anotacion;
use App\Servicio;
use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;


class ServiciosController extends Controller
{
	/**
	 *
	 * Guardar los servicios relacionados con los perfiles de las empresas
	 * 
	 */
	
	public function SaveService(Requests $data)
	{
		if($data->ajax()) {
			if ($data->hasFile('comprobante')) {
				$file = $data->file('comprobante');
				$destinationPath = 'uploads/comprobantes';
				$extension = $file->getClientOriginalExtension();
				$filename1 = "".str_random(12).".".$extension."";
				$upload_success = $file->move($destinationPath, $filename1);         
			}
			if (isset($filename1)) { $SR->comprobante = $filename1;}
			$SR              = new \App\Servicio;
			$SR->id_perfil   = $data->input('id_perfil');
			$SR->id_usuario  = Auth::id();
			$SR->estado      = 1;
			$SR->titulo      = $data->input('titulo');
			$SR->valor       = $data->input('valor');
			$SR->saldo       = $data->input('valor');
			$SR->token       = str_random(10);

			return $SR;
			

		}

	}
}
