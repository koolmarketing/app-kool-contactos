<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Anotacion;

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
}
