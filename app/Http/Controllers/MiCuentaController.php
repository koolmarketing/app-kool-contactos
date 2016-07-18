<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Hash;
use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;
use App\User;

// Request


use App\Http\Requests\UpdatePasswordUser;
use App\Http\Requests\UpdateImageProfileUser;


class MiCuentaController extends Controller
{
	public function Index()
	{
		$data = (object) array("page" => "Mi Cuenta");
		return view('configuracion.index',['data' => $data]);

	}
	public function UpdatePassword(UpdatePasswordUser $request)
	{

		$id = Auth::id();
		$usuario = User::find($id);
		
		if ($request->has('email')) {
    	$usuario->email = $request->input('email');
		}
		$usuario->password = Hash::make($request->input('password'));
		if ($usuario->save()) {
			return Redirect::back()->with('exito', 'Sus datos de acceso han sido guardados e encriptados');;
		}
		
	}
	public function UpdateImage(UpdateImageProfileUser $request){
		$id = Auth::id();
		$usuario = User::find($id);

		$Base64Img= $request->input('imagebase64');
		list(, $Base64Img) = explode(';', $Base64Img);
		list(, $Base64Img) = explode(',', $Base64Img);

		$nombre_imagen = "perfil_".str_random(3).".png";
		$name = "uploads/fotos/".$nombre_imagen;
		file_put_contents($name, base64_decode($Base64Img));
		$usuario->fotografia = $nombre_imagen;
		if ($usuario->save()) {
			return Redirect::back()->with('exito', 'Su foto de perfil ha sido modificada');;
		}
		

// echo "<img src='".$name."' alt='perfil' />";
// return $request->input();
	}


}
