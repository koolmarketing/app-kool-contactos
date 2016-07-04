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

class TarjetasController extends Controller
{

	public function FiltrarTarjetasHome(Request $request)
	{
		$tarjeta = $request->input('tarjeta');
		$inicio  = $request->input('inicio');
		$fin     = $request->input('fin');
		return response()->json(['tipo_tarjeta' => ''.$tarjeta.'','inicio'=>''.$inicio.'','fin'=>''.$fin.'']);

     return view('anotaciones.anotaciones_empresas',['anotaciones' => $anotaciones,'carbon'=>$carbon]);
 }
 public function GetFiltarTarjeta(Request $request){
    $inicio = $request->input('inicio');
    $fin    = $request->input('fin');
    $tipo   = $request->input('tipo');        
    $carbon = new \Carbon\Carbon();

    
    switch ($tipo) {
        case 'cobro':

        $anotaciones = DB::table('anotaciones')
        ->where('tipo_anotacion','=',''.$tipo.'')
        ->where('estado','=','1')
        ->whereBetween('fecha_cobro', [$inicio, $fin])
        ->join('users', 'anotaciones.id_creador', '=', 'users.id')
        ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
        ->select('anotaciones.*', 'empresas.id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
        ->orderBy('anotaciones.created_at', 'desc')
        ->get();
        //return "".$inicio." ".$fin." ".$tipo."";
        return view('anotaciones.anotaciones_empresas_home',['anotaciones' => $anotaciones,'carbon'=>$carbon]);

        break;

        case 'alerta':
        $anotaciones = DB::table('anotaciones')
        ->where('tipo_anotacion','=',''.$tipo.'')
        ->whereBetween('fecha_vencimiento', [$inicio, $fin])
        ->join('users', 'anotaciones.id_creador', '=', 'users.id')
        ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
        ->select('anotaciones.*', 'empresas.id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
        ->orderBy('anotaciones.created_at', 'desc')
        ->get();
        //return "".$inicio." ".$fin." ".$tipo."";
        return view('anotaciones.anotaciones_empresas_home',['anotaciones' => $anotaciones,'carbon'=>$carbon]);
        break;

        case 'comentario':
        $anotaciones = DB::table('anotaciones')
        ->where('tipo_anotacion','=',''.$tipo.'')
        ->whereBetween('fecha_comentario', [$inicio, $fin])
        ->join('users', 'anotaciones.id_creador', '=', 'users.id')
        ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
        ->select('anotaciones.*', 'empresas.id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
        ->orderBy('anotaciones.created_at', 'desc')
        ->get();
        //return "".$inicio." ".$fin." ".$tipo."";
        return view('anotaciones.anotaciones_empresas_home',['anotaciones' => $anotaciones,'carbon'=>$carbon]);
        break;

        case 'recordatorio':
        $anotaciones = DB::table('anotaciones')
        ->where('tipo_anotacion','=',''.$tipo.'')
        ->whereBetween('fecha_vencimiento', [$inicio, $fin])
        ->join('users', 'anotaciones.id_creador', '=', 'users.id')
        ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
        ->select('anotaciones.*', 'empresas.id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
        ->orderBy('anotaciones.created_at', 'desc')
        ->get();
        //return "".$inicio." ".$fin." ".$tipo."";
        return view('anotaciones.anotaciones_empresas_home',['anotaciones' => $anotaciones,'carbon'=>$carbon]);
        break;

        default:
        return false;
        break;
    }


}
}