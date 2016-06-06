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

class AnotacionesController extends Controller
{
    /**
     *
     * GuardarAnotacion
     * VerAnotaciones
     * UpdateAnotacion
     * OcultarAnotacion
     *
     */

    /**
     * Registar en Base de datos la anotacion
     *
     * @return void
     * @author Carlos Moran
     **/
    function GuardarAnotacion(Request $request)
    {

        if($request->ajax()) { 

            switch ($request->input('tipo')) {
                case 'comentario':
                $AN             = new \App\Anotacion;
                $AN->id_creador = Auth::id();
                $AN->mensaje    = $request->input('nota');
                $AN->tipo_anotacion       = $request->input('tipo');
                $AN->estado        = 1;
                $AN->tipo_perfil       = "empresa";  
                $AN->id_perfil         = $request->input('id_perfil'); 
                $AN->save();
                return $request->input();
                break;
                case 'recordatorio':
                $AN                    = new \App\Anotacion;
                $AN->id_creador        = Auth::id();
                $AN->fecha_vencimiento = $request->input('fecha');
                $AN->mensaje           = $request->input('nota');
                $AN->tipo_anotacion              = $request->input('tipo');
                $AN->estado            = 1; 
                $AN->id_perfil         = $request->input('id_perfil'); 
                $AN->tipo_perfil       = "empresa"; 
                $AN->save();
                return $request->input();
                break;
                case 'alerta':
                $AN                    = new \App\Anotacion;
                $AN->id_creador        = Auth::id();
                $AN->fecha_vencimiento = $request->input('fecha');
                $AN->mensaje           = $request->input('nota');
                $AN->tipo_anotacion              = $request->input('tipo');
                $AN->estado            = 1; 
                $AN->id_perfil         = $request->input('id_perfil'); 
                $AN->tipo_perfil       = "empresa"; 
                $AN->save();
                return $request->input();
                break;
                case 'cobro':
                $AN                    = new \App\Anotacion;
                $AN->id_creador        = Auth::id();
                $AN->fecha_inicio      = $request->input('inicio');
                $AN->fecha_cobro       = $request->input('fin');
                $AN->serial            = $request->input('serial');
                $AN->monto             = $request->input('monto'); 
                $AN->tipo_anotacion    = $request->input('tipo');
                $AN->estado            = 1;  
                $AN->id_perfil         = $request->input('id_perfil'); 
                $AN->tipo_perfil       = "empresa";  
                $AN->mensaje           = $request->input('nota');                
                $AN->save();
                return $request->input();
                break;
                
                default:
                return "nope";
                break;
            }        
            
        }                                  
    } 

    function print_anotacion_empresas($id){        
     $carbon = new \Carbon\Carbon();
     $anotaciones = DB::table('anotaciones')->where('id_perfil','=',''.$id.'')->join('users', 'anotaciones.id_creador', '=', 'users.id')->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')->select('anotaciones.id AS anotacion_id','anotaciones.*', 'empresas.id', 'empresas.nombre_comercial', 'users.fotografia')->orderBy('anotaciones.created_at', 'desc')->get();

     return view('anotaciones.anotaciones_empresas',['anotaciones' => $anotaciones,'carbon'=>$carbon]);
 }


    /*
    *
    * @Imprimir, comentarios según el tipo
    * Comentarios, alertas, Recordatorios, Cobros
    *
    */

    function all_anoaciones($id){
        $t_a=$id;
        $carbon = new \Carbon\Carbon();
        $anotaciones = DB::table('anotaciones')
        ->where('tipo_anotacion','=',''.$t_a.'')
        ->join('users', 'anotaciones.id_creador', '=', 'users.id')
        ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
        ->select('anotaciones.*', 'empresas.id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
        ->orderBy('anotaciones.created_at', 'desc')
        ->get();

        return view('anotaciones.anotaciones_empresas_home',['anotaciones' => $anotaciones,'carbon'=>$carbon]);
    }




/*
*
*    Imprimir valores
*
*/

function get_comentarios(){
    $total = DB::table('anotaciones')
    ->where('tipo_anotacion','=','comentario')
    ->count();
    return $total;
}

function get_alertas(){
    $total = DB::table('anotaciones')
    ->where('tipo_anotacion','=','alerta')
    ->count();
    return $total;
}

function get_recordatorios(){
    $total = DB::table('anotaciones')
    ->where('tipo_anotacion','=','recordatorio')
    ->count();
    return $total;
}

function get_cobros(){
    $total = DB::table('anotaciones')
    ->where('tipo_anotacion','=','cobro')
    ->count();
    return $total;
}

function updateCobro(Request $request){
    // Descontar del servicio
   
    $id_empresa   = $request->input('id_empresa');
    $id_anotacion = $request->input('id_anotacion');
    
     // $id_anotacion = 7;
    $cobro          = \App\Anotacion::find($id_anotacion);
    $servicio_activo=  DB::table('servicios')->where('serial', ''.$cobro->serial.'')->first(); $monto_cobro    = $cobro->monto;    

    $nuevo_saldo = $servicio_activo->saldo - $monto_cobro;

    $servicio_activo->saldo = $nuevo_saldo;

    DB::table('servicios')
          ->where('id', $servicio_activo->id)
          ->update(['saldo' => $nuevo_saldo]);

    DB::table('anotaciones')
          ->where('id', $cobro->id)
          ->update(['estado' => 0]);
        
    $id_user=Auth::id();

    $user_reporte = new \stdClass;

    $user_reporte->user = Auth::id();

    $usr_reporte = json_encode($user_reporte);

        DB::table('anotaciones')
          ->where('id', $cobro->id)
          ->update(['involucrados' => ''.$usr_reporte.'']);

    

    //return response()->json($cobro);
   return response()->json(['mensaje' => 'Se efectuo el reporte de pago: nuevo saldo para la orden de servicio #'.$cobro->serial.': '.$nuevo_saldo.'','tipo'=>'Exito']);
    

}

}    

