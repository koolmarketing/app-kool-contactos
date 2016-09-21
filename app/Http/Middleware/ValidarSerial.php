<?php

namespace App\Http\Middleware;
use DB;
use Closure;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;


class ValidarSerial
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if ($request->input('tipo')=="cobro" || $request->input('tipo_anotacion')=="cobro") 
      {
        $serial_cobro = $request->input('serial');
        $nuevo_cobro  = $request->input('monto');

        $serial_servicio = DB::table('servicios')->where('serial', '=', ''.$serial_cobro.'')->select('servicios.serial')->get();

        if (!empty($serial_servicio[0])) {
//$serial_cobro = 00124;
          $saldo_servicio = DB::table('servicios')->where('serial','=',''.$serial_cobro.'')->sum('saldo');

          $suma_cobros = DB::table('anotaciones')->where('serial','=',''.$serial_cobro.'')->sum('monto');

          $valor_servicio  =  DB::table('servicios')->where('serial','=',''.$serial_cobro.'')->sum('valor');
          if(!empty($request->input('edicion'))){
            if($request->input('edicion') == true){
              $valorprevio = DB::table('anotaciones')->where('id','=',''.$request->input('id').'')->sum('monto');
            }
          }
          

          $suma_cobros = intval($suma_cobros);
          $nuevo_cobro = intval($nuevo_cobro);
          $saldo_servicio = intval($saldo_servicio);


          if(!empty($request->input('edicion'))){
            if($request->input('edicion') == true){
              $valorprevio = DB::table('anotaciones')->where('id','=',''.$request->input('id').'')->sum('monto');
              $suma_cobros = intval($suma_cobros) - intval($valorprevio); 
            }
          }

          $suma_validacion = $suma_cobros + $nuevo_cobro;


          if ($nuevo_cobro > $saldo_servicio) {
            return response()->json(['mensaje' => 'El monto del cobro es superior al saldo del cliente =( ---suma_validacion:'.$suma_validacion.' suma_cobros:'.$suma_cobros.'--- serial: '.$serial_cobro.' -- Valor Previo: '.$valorprevio.'','tipo'=>'Error']);
          }elseif ($suma_validacion  > $valor_servicio ) {
            return response()->json(['mensaje' => 'El monto del cobro es superior al saldo del servicio prestado =( -- Valor Previo: '.$valorprevio.'','tipo'=>'Error']);
          }
        }
        else{
         return response()->json(['mensaje' => 'El serial no corresponde a ningún servicio =(','tipo'=>'Error']);
       }

       return $next($request);
     }
     return $next($request);
   }
 }
