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
			
			$meta_dia_actual_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" BETWEEN ? and ? ', [$inicio_dia,$fin_del_dia]);

			$meta_dia_actual_recaudo   = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and estado = 0 and fecha_cobro BETWEEN ? and ? ', [$inicio_dia,$fin_del_dia]);

			return $meta_dia_actual_total;
			break;

			case 'semana':   
			$meta_semana_actual_total         = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_semana,$fin_de_la_semana]);

			$meta_semana_actual_recaudado     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and estado = 0 and fecha_cobro BETWEEN ? and ? ', [$inicio_semana,$fin_de_la_semana]);	
			return $meta_semana_actual_total;

			break;

			case 'mes':
			$meta_mes_actual_total             = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro"  and fecha_cobro BETWEEN ? and ? ', [$inicio_mes,$fin_del_mes]);

			$meta_mes_actual_total = \App\Anotacion::whereBetween('fecha_cobro', array($inicio_primer_semestre, $fin_del_primer_semestre))
			->where('tipo_anotacion','=','cobro')
			->count();

			$metas_mes_actual_cumplimiento     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and estado = 0 and fecha_cobro BETWEEN ? and ? ', [$inicio_mes,$fin_del_mes]);

			return $fin_del_primer_semestre;
			break;

			case 'primer_trimestre':
			$meta_primer_trimestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_primer_trimestre,$fin_primer_trimestre]);
			$meta_primer_trimestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and estado = 0 and fecha_cobro BETWEEN ? and ? ', [$inicio_primer_trimestre,$fin_primer_trimestre]);
			break;

			case 'segundo_trimestre':
			$meta_segundo_trimestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_segundo_trimestre,$fin_segundo_trimestre]);
			$meta_segundo_trimestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and estado = 0 and fecha_cobro BETWEEN ? and ? ', [$inicio_segundo_trimestre,$fin_segundo_trimestre]);
			
			break;
			case 'tercer_trimestre':
			$meta_tercer_trimestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_tercer_trimestre,$fin_tercer_trimestre]);
			$meta_tercer_trimestre_recaudado = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and estado = 0 and fecha_cobro BETWEEN ? and ? ', [$inicio_tercer_trimestre,$fin_tercer_trimestre]);
			break;
			case 'cuarto_trimestre':
			$meta_cuarto_trimestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_cuarto_trimestre,$fin_cuarto_trimestre]);
			$meta_cuarto_trimestre_recaudado     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and estado = 0 and fecha_cobro BETWEEN ? and ? ', [$inicio_cuarto_trimestre,$fin_cuarto_trimestre]);
			break;
			case 'primer_semestre':
			$meta_primer_semestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_primer_semestre,$fin_primer_semestre]);
			$meta_primer_semestre_recaudado = DB::select('select SUM(monto) from anotaciones where estado = 0 and tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_primer_semestre,$fin_primer_trimestre]);
			break;
			case 'segundo_semestre':
			$meta_segundo_semestre_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_segundo_semestre,$fin_segundo_trimestre]);
			$meta_segundo_semestre_recaudado = DB::select('select SUM(monto) from anotaciones where estado = 0 and tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_segundo_semestre,$fin_segundo_trimestre]);	
			break;
			case 'año':
			$meta_año_total     = DB::select('select SUM(monto) from anotaciones where tipo_anotacion = "cobro" AND fecha_cobro BETWEEN ? AND ? ', [$inicio_año,$fin_de_año]);
			$meta_año_recaudado = DB::select('select SUM(monto) from anotaciones where estado = 0 and tipo_anotacion = "cobro" and fecha_cobro BETWEEN ? and ? ', [$inicio_año,$fin_de_año]);	
			
			break;      


			default:
			$respuesta = 0;
			break;
		}


	}




	/*Recaudo para "hoy"*/
}
