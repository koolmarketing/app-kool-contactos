<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Anotacion;

class ApiController extends Controller
{
	public function AllAnotaciones(){

		//return Anotacion::all();
		// $carbon = new \Carbon\Carbon();
		return DB::table('anotaciones')
		->where('tipo_anotacion','!=','""')
		->join('users', 'anotaciones.id_creador', '=', 'users.id')
		->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
		->select('anotaciones.*', 'empresas.id AS empresa_id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
		->orderBy('anotaciones.created_at', 'desc')
		->get();
	}

	public function AllAnotacionesRecordatorios(){

		//return Anotacion::all();
		// $carbon = new \Carbon\Carbon();
		return DB::table('anotaciones')
		->where('tipo_anotacion','=','recordatorio')
		->join('users', 'anotaciones.id_creador', '=', 'users.id')
		->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
		->select('anotaciones.*', 'empresas.id AS empresa_id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
		->orderBy('anotaciones.created_at', 'desc')
		->get();
	}

	public function EditAnotacion($id){

	}

	public function ShowCard($id){
		return DB::table('anotaciones')
		->where('anotaciones.id','=',''.$id.'')
		->join('users', 'anotaciones.id_creador', '=', 'users.id')
		->join('empresas', 'anotaciones.id_perfil', '=', 'empresas.id')
		->select('anotaciones.*', 'empresas.id AS empresa_id','empresas.foto', 'empresas.nombre_comercial', 'users.fotografia')
		->orderBy('anotaciones.created_at', 'desc')
		->get();
	}

	




}
