<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Anotacion;
use App\Costo;
use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;
use Clicknow\Money\Money;


class CostosController extends Controller
{
	/**
	 *
	 * Guardar los servicios relacionados con los perfiles de las empresas
	 * 
	 */
	
	public function SaveCosto(Request $data)
	{
		if ($data->hasFile('comprobante')) {
			$file = $data->file('comprobante');
			$destinationPath = 'uploads/comprobantes';
			$extension = $file->getClientOriginalExtension();
			$filename1 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename1);        
		}

		//if($data->ajax()) {		

		$SR              = new \App\Costo;

		if (isset($filename1)) {
			$SR->comprobante = $filename1;
		}

		$SR->id_perfil   = $data->input('id_perfil');
		$SR->id_usuario  = Auth::id();
		$SR->estado      = 1;
		$SR->inicio      = $data->input('inicio');
		$SR->fin         = $data->input('fin');
		$SR->titulo      = $data->input('titulo');
		$SR->valor       = $data->input('valor');
		$SR->saldo       = $data->input('valor');
		$SR->serial       = $data->input('serial');
		$SR->token       = str_random(10);
		$SR->comentarios_costo = $data->input('comentarios_costo');
		$SR->save();
		return $data->input();
		//}

	}
	public function All($id){
// Calcular Saldo //
		$carbon    = new \Carbon\Carbon();
		$costos = DB::table('costos')
		->join('users', 'users.id', '=', 'costos.id_usuario')
		->where('id_perfil', '=', ''.$id.'')
		->select('costos.id AS id_costo','costos.*','users.id', 'users.fotografia')
		->orderBy('costos.id','desc')->get();
		$saldo = DB::table('costos')->where('id_perfil', '=', ''.$id.'')->sum('saldo');
		return view('empresas.costos',['costos'=>$costos,'carbon'=>$carbon,'saldo'=>$saldo]);

	}

	public function Saldo($id){
		$saldo_actual = DB::table('costos')->where('id_perfil', '=', ''.$id.'')->sum('saldo');

		$saldo_actual = Money::COP($saldo_actual, true);
		echo $saldo_actual;
	}

	public function DesactivarServicio(){

	}	

	public function UpdateComprobanteCosto(Request $request)
	{
		
		$destinationPath = 'uploads/comprobantes/';

		if ($request->hasFile('comprobante')) {
			$file = $request->file('comprobante');
			$destinationPath = 'uploads/comprobantes';
			$extension = $file->getClientOriginalExtension();
			$filename2 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename2);


			$id_anotacion_costo = $request->input('id_anotacion_costo');
			$costos = \App\Costo::find($id_anotacion_costo);
			$costos->comprobante = $filename2;
			$costos->save();

			return Redirect::back();          
		}		

		else{
			echo "error";
		}
		
	}
}
