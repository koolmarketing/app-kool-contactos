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
use Clicknow\Money\Money;


class ServiciosController extends Controller
{
	/**
	 *
	 * Guardar los servicios relacionados con los perfiles de las empresas
	 * 
	 */
	
	public function SaveService(Request $data)
	{
		if ($data->hasFile('comprobante')) {
			$file = $data->file('comprobante');
			$destinationPath = 'uploads/comprobantes';
			$extension = $file->getClientOriginalExtension();
			$filename1 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename1);        
		}

		//if($data->ajax()) {		

		$SR              = new \App\Servicio;

			// if (isset($filename1)) {
			// 	$SR->comprobante = $filename1;
			// }

		$SR->id_perfil          = $data->input('id_perfil');
		$SR->id_usuario         = Auth::id();
		$SR->estado             = 1;
		$SR->inicio             = $data->input('inicio');
		$SR->fin                = $data->input('fin');
		$SR->titulo             = $data->input('titulo');
		$SR->valor              = $data->input('valor');
		$SR->saldo              = $data->input('valor');
		$SR->serial      	    = $data->input('serial');
		$SR->titulo_retencion   = $data->input('retencion');
		$SR->iva 				= $data->input('iva');
		$SR->valor_retencion	= $data->input('valor_retencion');
		$SR->valor_iva      	= $data->input('valor_iva');
		$SR->costos         	= $data->input('costos');
		if ($data->input('comentarios_servicio')=="Observación") {$SR->comentarios_servicio = "";}
		else{$SR->comentarios_servicio   	= $data->input('comentarios_servicio');}
		
		$SR->utilidad_neta   	= $data->input('utilidad_neta');
		$SR->token              = str_random(10);
		$SR->save();
		return $data->input();
		//}

	}
	public function All($id){
// Calcular Saldo //


		$carbon    = new \Carbon\Carbon();
		$servicios = DB::table('servicios')
		->join('users', 'users.id', '=', 'servicios.id_usuario')
		->where('id_perfil', '=', ''.$id.'')
		->select('servicios.id AS id_servicio','servicios.*','users.id', 'users.fotografia')
		->orderBy('servicios.id','desc')->get();

		$saldo = DB::table('servicios')->where('id_perfil', '=', ''.$id.'')->sum('saldo');
		// \App\Servicio::orderBy('id','desc')->get();
		// $money = new \Clicknow\Money();

		return view('empresas.servicios',['servicios'=>$servicios,'carbon'=>$carbon,'saldo'=>$saldo]);

	}

	public function Saldo($id){
		$saldo_actual = DB::table('servicios')->where('id_perfil', '=', ''.$id.'')->sum('saldo');

		$saldo_actual = Money::COP($saldo_actual, true);
		echo $saldo_actual;
	}

	public function DesactivarServicio(){

	}	

	public function UpdateComprobanteServicio(Request $request)
	{
		{

			$destinationPath = 'uploads/comprobantes/';
			if ($request->hasFile('comprobante')) {
				$file = $request->file('comprobante');
				$destinationPath = 'uploads/comprobantes';
				$extension = $file->getClientOriginalExtension();
				$filename1 = "".str_random(12).".".$extension."";
				$upload_success = $file->move($destinationPath, $filename1);           
			}

			if (!empty($filename1)) {
				$servicio = \App\Servicio::find($request->input('id_anotacion'));
				$servicio->comprobante = $filename1;
				$servicio->save();

				Session::flash('mensaje', "Se ha guardado el comprobante correctamente");
				return Redirect::back();
			}else{
				echo "error";
			}




		}

	}


}
