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
}
