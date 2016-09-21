<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class ValidarRecaudo
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
        $monto          = intval($request->input('monto'));
        $serial_cobro   = $request->input('serial');
        $saldo_servicio = DB::table('servicios')->where('serial','=',''.$serial_cobro.'')->select('servicios.saldo')->get();
        $valor_servicio = DB::table('servicios')->where('serial','=',''.$serial_cobro.'')->select('servicios.valor')->get();

        if (intval($saldo_servicio) + $monto > intval($saldo_servicio)) {
            return response()->json(['mensaje' => 'El monto a deducir supera el saldo del servicio','tipo'=>'Error']);
        }else{ return $next($request); }
    }
}
