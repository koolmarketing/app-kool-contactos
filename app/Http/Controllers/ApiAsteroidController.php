<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Mail;
use App\Anotacion;
use Carbon\carbon;
use Storage;
use App\Empresa;

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
        ->where('estado','=','1')
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
        return Anotacion::findOrFail($id);

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
        // Anotacion::findOrFail($id)->update($request->all());
        // return response()->json($request->all());
        return "Ok llego a asteroid";
    }

    public function ActualizarTarjeta (Request $request)
    {

        $tarjeta = Anotacion::find($request->id);

        $tarjeta->mensaje            = $request->mensaje;
        $tarjeta->id_creador         = intval($request->id_creador);
        $tarjeta->fecha_cobro        = $request->fecha_cobro;
        $tarjeta->fecha_vencimiento  = $request->fecha_vencimiento;
        $tarjeta->serial             = $request->serial;
        $tarjeta->monto              = $request->monto;
        $tarjeta->estado             = $request->estado;
        $tarjeta->fecha_inicio       = $request->fecha_inicio;
        $tarjeta->involucrados       = $request->involucrados;
        $tarjeta->id_perfil          = intval($request->id_perfil);
        $tarjeta->tipo_perfil        = $request->tipo_perfil;
        $tarjeta->comprobante        = $request->comprobante;
        $tarjeta->fecha_comentario   = $request->fecha_comentario;

        $tarjeta->save();
        return $tarjeta;
        
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

    public function EnviarCorreo(Request $request){

/*
@ Crear Evento ( Archivo Plano )
*/
function GenerarIcalendar(){
    $IC = 'BEGIN:VCALENDAR 
    VERSION:2.0 
    PRODID:-//www.marudot.com//iCal Event Maker 
    CALSCALE:GREGORIAN
    BEGIN:VTIMEZONE 
    TZID:America/Bogota
    TZURL:http://tzurl.org/zoneinfo-outlook/America/Bogota 
    X-LIC-LOCATION:America/Bogota 
    BEGIN:STANDARD 
    TZOFFSETFROM:-0500 
    TZOFFSETTO:-0500 
    TZNAME:COT 
    DTSTART:19700101T000000 
    END:STANDARD 
    END:VTIMEZONE 
    BEGIN:VEVENT 
    DTSTAMP:20160820T180201Z 
    UID:20160820T180201Z-1809902584@marudot.com 
    DTSTART;TZID="America/Bogota":20160821T130000
    DTEND;TZID="America/Bogota":20160821T150000 
    SUMMARY:Nombre Evento 
    URL:http%3A%2F%2Fkoolmarketing.net 
    DESCRIPTION:descripcion 
    LOCATION:Cali
    END:VEVENT 
    END:VCALENDAR 
    ';
    return $IC;
}

$vCalendar = new \Eluceo\iCal\Component\Calendar('www.example.com');
            // 2. Create an event
$vEvent = new \Eluceo\iCal\Component\Event();
$vEvent->setDtStart(new \DateTime('2016-08-24'));
$vEvent->setDtEnd(new \DateTime('2016-08-24'));
$vEvent->setNoTime(true);
$vEvent->setSummary('Christmas');
$vEvent->setUseTimezone(true);
            // 3. Add event to calendar
$vCalendar->addComponent($vEvent);
            // 4. Set headers
header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename="cal.ics"');
            // 5. Output

$name_file = "nuevo_evento_".str_random(4).".ics";

//Storage::disk('public')->put($name_file,  $vCalendar->render());
Storage::disk('public')->put($name_file,  GenerarIcalendar());

$ruta_adjunto = asset('storage/app/public/'.$name_file.'');


$mensaje = $request->input('mensaje');
$the_id = $request->input('tarjeta');
$tarjeta =  DB::table('anotaciones')->where('anotaciones.id','=',''.$the_id.'')->join('users', 'anotaciones.id_creador', '=', 'users.id')->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')->select('anotaciones.*', 'empresas.id AS empresa_id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')->orderBy('anotaciones.created_at', 'desc')->first();

$data = new \stdClass;
$data->id_tarjeta        = $tarjeta->id;
$data->mensaje           = $tarjeta->mensaje;
$data->id_creador        = $tarjeta->id_creador;
$data->fecha_vencimiento = $tarjeta->fecha_vencimiento;
$data->serial            = $tarjeta->serial;
$data->monto             = $tarjeta->monto;
$data->estado            = $tarjeta->estado;
$data->created_at        = $tarjeta->created_at;
$data->updated_at        = $tarjeta->updated_at;
$data->fecha_inicio      = $tarjeta->fecha_inicio;
$data->involucrados      = $tarjeta->involucrados;
$data->id_perfil         = $tarjeta->id_perfil;
$data->tipo_perfil       = $tarjeta->tipo_perfil;
$data->tipo_anotacion    = $tarjeta->tipo_anotacion;
$data->comprobante       = $tarjeta->comprobante;
$data->fecha_comentario  = $tarjeta->fecha_comentario;
$data->empresa_id        = $tarjeta->empresa_id;
$data->foto              = $tarjeta->foto;
$data->nombre_comercial  = $tarjeta->nombre_comercial;
$data->fotografia        = $tarjeta->fotografia;
$data->nota_mail         = $mensaje;
$data->fecha_cobro       = $tarjeta->fecha_cobro;
$data->destino           = $request->input('email');

$the_email    =  $request->input('email');

if($tarjeta->tipo_anotacion=="comentario"){
    Mail::later(5, 'emails.anotacion_mail', ['msm'=>$data], function($message){
        $message->to('soporteweb@koolmarketing.net','Koolkontact')->subject('Anotación en Perfil de Cliente');
    });
}elseif ($tarjeta->tipo_anotacion=="recordatorio") {
 Mail::later(5, 'emails.recordatorio_mail', ['msm'=>$data], function($message){
    $message->to('soporteweb@koolmarketing.net','Koolkontact')->subject('Recordatorio');
});
}elseif ($tarjeta->tipo_anotacion=="cobro") {

    Mail::later(5, 'emails.cobro_mail', ['msm'=>$data], function($message){
        $message->to('soporteweb@koolmarketing.net','Koolkontact')->subject('Recordatorio de Cobro');               
        // $message->attach(storage_path('app/public/'.$name_file.''), [
        //                 'as' => 'recordatorio_cobro.ics'
        //             ]);
    });
}else{
    return "Not Send";
}

return $request->input('Send !!');

}

public function FiltroFecha($ini,$fin){
        // return $ini;
    return DB::table('anotaciones')
    ->where('estado','=','1')
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
        ->select(DB::raw('SUM(valor) as total'))
        ->whereBetween('inicio', [$inicio, $fin])
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

public function ShowProfile($id){
    $data = Empresa::findOrFail($id);
    return $data;
}

public function ShowTargetsProfile($id){
    $data = DB::table('anotaciones')
    ->where('id_perfil','=',''.$id.'')
    ->join('users', 'anotaciones.id_creador', '=', 'users.id')
    ->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
    ->select('anotaciones.*', 'empresas.id AS empresa_id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
    ->orderBy('anotaciones.created_at', 'desc')
    ->get();
    return $data;
}
public function ShowTargetService($id){
    $data = DB::table('servicios')
    ->where('serial','=',''.$id.'')
    ->join('users', 'servicios.vendedor', '=', 'users.id')
    ->join('empresas','servicios.id_perfil','=','empresas.id')
    ->select('servicios.*','empresas.foto AS logo','empresas.id AS id_empresa','empresas.nombre_comercial AS nombre_empresa','users.id AS id_vendedor','users.fotografia AS foto_vendedor','users.name AS nombre_vendedor')
    ->get();       
    return $data;
}

public function ShowPaymentsService($id){
    $data = DB::table('anotaciones')
    ->where('serial','=',''.$id.'')  
    ->orderBy('anotaciones.created_at', 'desc')      
    ->get();     
    return $data;
}
public function AllServices($id){
    $data = DB::table('servicios')
    ->where('id_perfil','=',''.$id.'')
    ->join('users', 'servicios.vendedor', '=', 'users.id')
    ->select('servicios.*','users.id AS id_vendedor','users.fotografia AS foto_vendedor','users.name AS nombre_vendedor')
    ->orderBy('servicios.created_at','desc')
    ->get();
    return $data;
}
public function AllServicesFilter($id,$inicio,$fin){

    $data = DB::table('servicios')
    ->where('id_perfil','=',''.$id.'')
    ->whereBetween('inicio', [$inicio, $fin])
    ->join('users', 'servicios.vendedor', '=', 'users.id')
    ->select('servicios.*','users.id AS id_vendedor','users.fotografia AS foto_vendedor','users.name AS nombre_vendedor')
    ->orderBy('servicios.created_at','desc')
    ->get();
    return $data;

}
public function DeleteTarget($id){
    Anotacion::destroy($id);
    return "ok";
}
public function LoadService($id){
    $data = DB::table('servicios')
    ->where('id','=',''.$id.'')
    ->get();
    return $data;
}
public function LoadRetenciones(){
    $data = DB::table('retencion_fuente')
    ->get();
    return $data;
}
public function LoadVendedores(){
     $data = DB::table('users')
     ->select('id','name')
    ->get();
    return $data;
}
public function ValueRetencion($id){
    $data = DB::table('retencion_fuente')
    ->where('concepto','=','Compras generales (declarantes)')
    ->get();
}


}
