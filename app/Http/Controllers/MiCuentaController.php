<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;
use App\User;

// Request


use App\Http\Requests\UpdatePasswordUser;


class MiCuentaController extends Controller
{
	public function Index()
	{
		$data = (object) array("page" => "Mi Cuenta");
		return view('configuracion.index',['data' => $data]);

	}
	public function UpdatePassword(UpdatePasswordUser $request)
	{

		// $id = Auth::id();
		// $user = User::find($id);
		// $email_ok = empty($request->input('email'));
		// if ($email_ok) {
		// 	$user->email=$request->input('email');
		// }
		// $user->password = Hash::make($request->input('password'));
		// $user->save();
		return "OK";
		
	}


}
