<?php

namespace App\Http\Middleware;

use Closure;

class ValidarServicio
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
        if (empty($request->input('titulo'))) {
            return response()->json(['mensaje' => 'El servicio debe tener un título','tipo'=>'Error']);
        }
        elseif(strlen($request->input('titulo'))<=6) {
            return response()->json(['mensaje' => 'El Título del servicio es muy corto','tipo'=>'Error']);
        }
        elseif($request->input('inicio')==""||$request->input('fin')==""){
            return response()->json(['mensaje' => 'Se requiere conocer la fecha del servicio','tipo'=>'Error']);
        }
        elseif(empty($request->input('serial'))){
            return response()->json(['mensaje' => 'El número de comprobante o código de seguimiento es necesario','tipo'=>'Error']);
        }
        elseif(empty($request->input('valor'))){
            return response()->json(['mensaje' => 'Es necesario indicar el valor del servicio','tipo'=>'Error']);
        }
        elseif(empty($request->input('costos'))){
            return response()->json(['mensaje' => 'Si el servicio no tuvo costos operativos operativos por favor indiquelo con un 0','tipo'=>'Error']);
        }
        elseif(empty($request->input('iva'))){
            return response()->json(['mensaje' => 'Es necesario conocer el IVA','tipo'=>'Error']);
        }
        elseif($request->input('retencion')=="0"){
            return response()->json(['mensaje' => 'Es necesario conocer la Retefuente','tipo'=>'Error']);
        }
        else{
            return $next($request);
        }
    }
}
