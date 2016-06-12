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
use Carbon\carbon;

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
		function CalcularValores($inicio,$fin)
		{
			$respuesta = new \stdClass;

			$meta_total =  DB::table('anotaciones')
			->select(DB::raw('SUM(monto) as total'))
			->whereBetween('fecha_cobro', [$inicio, $fin])
			->where('tipo_anotacion', '=', 'cobro')
			->get();
			$meta_actual = DB::table('anotaciones')
			->select(DB::raw('SUM(monto) as total'))
			->whereBetween('fecha_cobro', [$inicio, $fin])
			->where('tipo_anotacion', '=', 'cobro')
			->where('estado', '=', '0')
			->get();
			$respuesta->inicio = $inicio;
			$respuesta->final  = $fin;
			$respuesta->meta_total  = $meta_total;
			$respuesta->meta_actual = $meta_actual;
			return $respuesta;
		}
		if ($tipo == "home") {

			function calculardia(){
				$dia = new \stdClass;
				$inicio = \Carbon\carbon::now()->startOfDay();
				$fin    = \Carbon\carbon::now()->endOfDay();
				$respuesta = CalcularValores($inicio,$fin);			
				return $respuesta;

			}
			function calcularsemana(){  
				$semana = new \stdClass;
				$inicio = Carbon::now()->startOfWeek();
				$fin    = Carbon::now()->endOfWeek();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;
			}
			/* Fin Semana*/

			/*   Mes Actual     */

			function calcularmes(){		
				$mes = new \stdClass;
				$inicio = Carbon::now()->startOfMonth();
				$fin    = Carbon::now()->endOfMonth();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;
			}

			/* Fin mes Actual   */

			/*   Primer Trimstre     */

			function calcularprimertrimestre(){	
				$primetrimestre= new \stdClass;
				$inicio = Carbon::now()->startOfYear();
				$fin    = Carbon::now()->startOfYear()->addMonths(3)->endOfMonth();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;
			}

			/*   Primer Trimstre     */
			function calcularsegundotrimestre(){
				$segundotrimestre= new \stdClass;
				$inicio = Carbon::now()->startOfYear()->addMonths(4);
				$fin    = Carbon::now()->startOfYear()->addMonths(6)->endOfMonth();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;
			}

			
			function calculartercertrimestre(){
				$tercertrimestre= new \stdClass;
				$inicio = Carbon::now()->startOfYear()->addMonths(7);
				$fin    = Carbon::now()->startOfYear()->addMonths(9)->endOfMonth();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;

			}

			function calcularcuartotrimestre(){
				$cuartotrimestre= new \stdClass;
				$inicio = Carbon::now()->startOfYear()->addMonths(10);
				$fin    = Carbon::now()->endOfYear();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;
			}

			function calcularprimersemestre(){
				$primersemestre = new \stdClass;
				$inicio = Carbon::now()->startOfYear();
				$fin    = Carbon::now()->startOfYear()->addMonths(5)->endOfMonth();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;
			}

			function calcularsegundosemestre(){
				$segundosemestre = new \stdClass;
				$inicio = Carbon::now()->startOfYear()->addMonths(6);
				$fin    = Carbon::now()->endOfYear();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;
			}

			function calcularano(){
				$ano = new \stdClass;
				$inicio = Carbon::now()->startOfYear();
				$fin    = Carbon::now()->endOfYear();
				$respuesta = CalcularValores($inicio,$fin);
				return $respuesta;							
			}  


			$valores = array(
				'dia' => calculardia(), 
				'semana' => calcularsemana(), 
				'mes' => calcularmes(), 
				'primer_trimestre' => calcularprimertrimestre(), 
				'segundo_trimestre' => calcularsegundotrimestre(), 
				'tercer_trimestre' => calculartercertrimestre(), 
				'cuarto_trimestre' => calcularcuartotrimestre(), 
				'primer_semestre' => calcularprimersemestre(), 
				'segundo_semestre' => calcularsegundosemestre(), 
				'ano' => calcularano() 
				);

			return  response()->json($valores);






		}



	}
}




/*Recaudo para "hoy"*/

