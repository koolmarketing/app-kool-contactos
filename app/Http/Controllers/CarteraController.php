<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Anotacion;
use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;

class CarteraController extends Controller
/*
*
*
*
*/
{
	public function ModalCartera($id){
		$cobros = DB::table('anotaciones')
		->where('tipo_anotacion','=','cobro')
		->where('id_perfil','=',''.$id.'')
		->orderBy('anotaciones.created_at', 'desc')
		->get();
		return view('anotaciones.cartera_modal',['cobros'=>$cobros]);
	}


	/* Calcular Recaudo */
	public function Calcular_Recaudo($tipo)
	{

		$ahora = \Carbon\Carbon::now();

// !AÑO
		$inicio_año  = $ahora->startOfYear(); 
		$fin_de_año   = $ahora->endOfYear(); 
// !DIA
		$inicio_dia  = $ahora->startOfDay();
		$fin_del_dia  = $ahora->endOfDay();
// !SEMANA
		$inicio_semana    = $ahora->startOfWeek(); 
		$fin_de_la_semana = $ahora->endOfWeek();
// !MES
		$inicio_mes  = $ahora->startOfMonth();
		$fin_del_mes = $ahora->endOfMonth();


// !SEMESTRES 

//PRIMER 
		$inicio_primer_semestre  = $inicio_año;
		$fin_del_primer_semestre = $inicio_año->addMonths(6)->endOfMonth(); 

//SEGUNDO
		$inicio_segundo_semestre  = $fin_del_primer_semestre;
		$fin_del_segundo_semestre = $fin_de_año;

// !TRIMESTRES

//PRIMER
		$inicio_primer_trimestre = $inicio_año; 
		$fin_primer_trimestre    = $inicio_año->addMonths(3)->endOfMonth();


//SEGUDO
		$inicio_segundo_trimestre = $inicio_año->addMonths(4); 
		$fin_segundo_trimestre    = $inicio_segundo_trimestre->addMonths(2)->endOfMonth();

//TERCERO
		$inicio_tercer_trimestre = $inicio_año->addMonths(7); 
		$fin_tercer_trimestre    = $inicio_tercer_trimestre->addMonths(2)->endOfMonth();

//CUARTO
		$inicio_cuarto_trimestre = $inicio_año->addMonths(10);  
		$fin_cuarto_trimestre    = $fin_de_año;


//
		

		switch ($tipo) {
			case 'dia':      
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_dia, $fin_del_dia])
			->sum('monto');	
			break;
			case 'semana':   
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_semana, $fin_de_la_semana])
			->sum('monto');	
			break;
			case 'mes':
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_mes, $fin_del_mes])
			->sum('monto');
			case 'primer_trimestre':
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_primer_trimestre, $fin_primer_trimestre])
			->sum('monto');	
			break;
			case 'segundo_trimestre':
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_segundo_trimestre, $fin_segundo_trimestre])
			->sum('monto');	
			break;
			case 'tercer_trimestre':
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_tercer_trimestre, $fin_tercer_trimestre])
			->sum('monto');	
			break;
			case 'cuarto_trimestre':
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_cuarto_trimestre, $fin_cuarto_trimestre])
			->sum('monto');	
			break;
			case 'primer_semestre':
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_primer_semestre, $fin_del_primer_semestre])
			->sum('monto');	
			break;
			case 'segundo_semestre':
			$respuesta = DB::table('anotaciones')
			->where('tipo_anotacion','=','cobro')
			->whereBetween('fecha_cobro', [$inicio_segundo_semestre, $fin_cuarto_trimestre])
			->sum('monto');	
			break;
	case 'año':      # code...	break;
	
	default:
		# code...
	break;
}


}




/*Recaudo para "hoy"*/
}
