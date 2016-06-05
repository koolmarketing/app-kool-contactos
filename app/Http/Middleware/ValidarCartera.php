<?php
namespace App\Http\Middleware;
use DB;
use Closure;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;
class ValidarCartera
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
            $id          = $request->input('id_perfil');
            $nuevo_cobro = $request->input('monto'); 

            $saldo_actual = 
            DB::table('servicios')
            ->where('id_perfil', '=', ''.$id.'')
            ->sum('saldo');

            $total_cobros =
            DB::table('anotaciones')
            ->where('tipo_anotacion','=','cobro')
            ->where('id_perfil','=',''.$id.'')
            ->sum('monto');
            $valor = $total_cobros + $nuevo_cobro;

            if ($valor > $saldo_actual) 
            {
                //return response('excede');
                return response()->json(['mensaje' => 'Excede el Saldo Total','tipo'=>'Error']);
            }
            return $next($request);
        }
        return $next($request);

    }
}