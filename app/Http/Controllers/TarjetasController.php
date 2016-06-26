<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Anotacion;
use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;

class TarjetasController extends Controller
{

	public function FiltrarTarjetasHome(Request $request)
	{
		
	}
	public function FiltarTarjeta($inicio,$fin){
		return "Holaaa funciona";
	}
}