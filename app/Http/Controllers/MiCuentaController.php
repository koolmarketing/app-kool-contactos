<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MiCuentaController extends Controller
{
	public function Index()
	{
		$data = (object) array("page" => "Mi Cuenta");
		return view('configuracion.index',['data' => $data]);

	}
	public function UpdatePassword(Request $request)
	{
		
	}
}
