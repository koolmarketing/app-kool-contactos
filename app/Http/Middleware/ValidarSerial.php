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
        if ($request->input('tipo')=="cobro") 
        {
            $serial_cobro = $request->input('serial');
            $saldo_cobro  = $request->input('monto');

            $serial_servicio =
            DB::table('servicios')
            ->where('serial', '=', ''.$serial_cobro.'')
            ->get();

            if (!empty($serial_servicio)) {

                $saldo_servicio = DB::table('servicios')
                ->where('serial','=',''.$serial_cobro.'')
                ->sum('saldo');

                if ($saldo_cobro > $saldo_servicio) {
                    return response()->json(['mensaje' => 'El monto del cobro es superior al saldo del servicio =(','tipo'=>'Error']);
                }
                
            }else{
              return response()->json(['mensaje' => 'El serial no corresponde a ningún servicio =(','tipo'=>'Error']);

          }

          return $next($request);
      }
      return $next($request);
  }
}
