<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Empresa;
use App\Persona;
use App\Reporte;
use DB;
use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;


class ConfiguracionController extends Controller
{
	public function ListaUsuarios(){
		$users = User::all();
		$data = (object) array("page" => "Usuarios","usuarios"=>$users);
		return view('usuarios.lista',['data' => $data]);
	}
	public function ActivarUsuario($id){
		
			$user = User::find($id);
			$user->activo = 1;
			$user->save();
			return redirect()->action('ConfiguracionController@ListaUsuarios');
		
	}
		public function DesactivarUsuario($id){
		
			$user = User::find($id);
			$user->activo = 0;
			$user->save();		

			return redirect()->action('ConfiguracionController@ListaUsuarios');
		
	}
}