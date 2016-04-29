<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
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

            $mensaje             = $request->input('nota');
            $id_creador          = Auth::id();
            $fecha_cobro         = $request->input('fin');
            $fecha_vencimiento   = $request->input('fecha');
            $serial              = $request->input('serial');
            $monto               = $request->input('monto');
            $estado              = 1;
            $fecha_inicio        = $request->input('inicio');
            $id_perfil           = $request->input('id_perfil');
            $tipo                = $request->input('tipo');

            $input = $request->all();

            $AN = new \App\Anotacion;
            

            // if ($request->has('nota'))        {$AN->mensaje = $request->input('nota')} 
            // if ($request->has('fecha_cobro')) {$AN->fecha_cobro = $request->input('id_creador')} else{}
            // if ($request->has('fin'))         { $AN->fecha_cobro = $request->input('fin') } 
            // if ($request->has('inicio'))      {$AN->fecha_inicio = $request->input('inicio')} 
            // if ($request->has('fecha'))       {$AN->fecha_vencimiento = $request->input('fecha')} 
            // if ($request->has('serial'))      {$AN->serial = $request->input('serial')} 
            // if ($request->has('monto'))       {$AN->monto = $request->input('monto')} 


            
            // $AN->estado    = 1;
            //$AN->id_perfil = $request->input('id');
            //$AN->save();
           
            return $id_creador;
            
        }                                  
    } 
}    

