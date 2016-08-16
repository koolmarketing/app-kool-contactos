<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Anotacion;
use Carbon\carbon;


class ApiAsteroidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('anotaciones')
        ->where('tipo_anotacion','!=','""')
        ->join('users', 'anotaciones.id_creador', '=', 'users.id')
        ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
        ->select('anotaciones.*', 'empresas.id AS empresa_id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
        ->orderBy('anotaciones.created_at', 'desc')
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return App\Anotacion::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Anotacion::findOrFail($id)->update($request->all());
        return response()->json($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Anotacion::destroy($id)){
            Activity::log([
                'contentId'   => Auth::id(),
                'contentType' => 'User',
                'action'      => 'Delete',
                'description' => 'Eliminó tarjeta id # '.$id.'',
                'details'     => 'Username: '.Auth::user(),
                'updated'     => (bool) Auth::id(),
                ]);
        }else{return "Not deleted";}

    }

    public function FiltroFecha($ini,$fin){
        // return $ini;
        return DB::table('anotaciones')
        ->whereBetween('fecha_cobro', [$ini, $fin])
        ->orwhereBetween('fecha_vencimiento', [$ini, $fin])
        ->orwhereBetween('fecha_comentario', [$ini, $fin])
        ->join('users', 'anotaciones.id_creador', '=', 'users.id')
        ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
        ->select('anotaciones.*', 'empresas.id AS empresa_id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
        ->orderBy('anotaciones.created_at', 'desc')
        ->get();

    }

    public function GetRecaudo(){

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
            $fin    = Carbon::now()->startOfYear()->addMonths(2)->endOfMonth();
            $respuesta = CalcularValores($inicio,$fin);
            return $respuesta;
        }

        /*   Primer Trimstre     */
        function calcularsegundotrimestre(){
            $segundotrimestre= new \stdClass;
            $inicio = Carbon::now()->startOfYear()->addMonths(3);
            $fin    = Carbon::now()->startOfYear()->addMonths(5)->endOfMonth();
            $respuesta = CalcularValores($inicio,$fin);
            return $respuesta;
        }


        function calculartercertrimestre(){
            $tercertrimestre= new \stdClass;
            $inicio = Carbon::now()->startOfYear()->addMonths(6);
            $fin    = Carbon::now()->startOfYear()->addMonths(8)->endOfMonth();
            $respuesta = CalcularValores($inicio,$fin);
            return $respuesta;

        }

        function calcularcuartotrimestre(){
            $cuartotrimestre= new \stdClass;
            $inicio = Carbon::now()->startOfYear()->addMonths(9);
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

        $trimestre_actual=Carbon::now();
        $mes = $trimestre_actual->month;
        if ($mes >= 1 and $mes <= 3) {
            $trimestre_actual = calcularprimertrimestre();
            $semestre_actual  = calcularprimersemestre();
        } elseif ($mes >= 4 and $mes <= 6) {
            $trimestre_actual = calcularsegundotrimestre();
            $semestre_actual  = calcularprimersemestre();
        } elseif ($mes >= 7 and $mes <= 10) {
            $trimestre_actual = calculartercertrimestre();
            $semestre_actual  = calcularsegundosemestre();
        }else{
            $trimestre_actual = calcularcuartotrimestre();
            $semestre_actual  = calcularsegundosemestre();
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
            'ano' => calcularano(),
            'trimestre_actual' => $trimestre_actual,
            'semestre_actual'  => $semestre_actual
            );

        return  response()->json($valores);

    }

    public function GetFinanzas (){

        function CalcularFinanzas($inicio,$fin)
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
            $contratacion_mes = DB::table('servicios')
            ->select(DB::raw('SUM(saldo) as total'))
            ->whereBetween('created_at', [$inicio, $fin])
            ->get();
            
            $respuesta->inicio = $inicio;
            $respuesta->final  = $fin;
            $respuesta->meta_mes  = $meta_total;
            $respuesta->meta_actual = $meta_actual;
            $respuesta->contratacion_mes = $contratacion_mes;
            
            return $respuesta;
        }

        function enero(){
            $inicio = Carbon::now()->startOfYear();
            $fin    = Carbon::now()->startOfYear()->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }

        function febrero(){
            $inicio = Carbon::now()->startOfYear()->addMonths(1);
            $fin    = Carbon::now()->startOfYear()->addMonths(1)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function marzo(){
            $inicio = Carbon::now()->startOfYear()->addMonths(2);
            $fin    = Carbon::now()->startOfYear()->addMonths(2)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function abril(){
            $inicio = Carbon::now()->startOfYear()->addMonths(3);
            $fin    = Carbon::now()->startOfYear()->addMonths(3)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function mayo(){
            $inicio = Carbon::now()->startOfYear()->addMonths(4);
            $fin    = Carbon::now()->startOfYear()->addMonths(4)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function junio(){
            $inicio = Carbon::now()->startOfYear()->addMonths(5);
            $fin    = Carbon::now()->startOfYear()->addMonths(5)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function julio(){
            $inicio = Carbon::now()->startOfYear()->addMonths(6);
            $fin    = Carbon::now()->startOfYear()->addMonths(6)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function agosto(){
            $inicio = Carbon::now()->startOfYear()->addMonths(7);
            $fin    = Carbon::now()->startOfYear()->addMonths(7)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function septiembre(){
            $inicio = Carbon::now()->startOfYear()->addMonths(8);
            $fin    = Carbon::now()->startOfYear()->addMonths(8)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function octubre(){
            $inicio = Carbon::now()->startOfYear()->addMonths(9);
            $fin    = Carbon::now()->startOfYear()->addMonths(9)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function noviembre(){
            $inicio = Carbon::now()->startOfYear()->addMonths(10);
            $fin    = Carbon::now()->startOfYear()->addMonths(10)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }
        function diciembre(){
            $inicio = Carbon::now()->startOfYear()->addMonths(11);
            $fin    = Carbon::now()->startOfYear()->addMonths(11)->endOfMonth();
            return CalcularFinanzas($inicio,$fin);
        }

          $meses = array(
            'enero' => enero(), 
            'febrero' => febrero(), 
            'marzo' => marzo(), 
            'abril' => abril(), 
            'mayo' => mayo(), 
            'junio' => junio(), 
            'julio' => julio(), 
            'agosto' => agosto(), 
            'septiembre' => septiembre(), 
            'octubre' => octubre(),
            'noviembre' => noviembre(),
            'diciembre'  => diciembre()
            );

        return  response()->json($meses);

    }
}
