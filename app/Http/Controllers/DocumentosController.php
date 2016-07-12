<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DocumentosController extends Controller
{
	public function Index()
	{
		$data = (object) array("page" => "Documentos");
		return view('documentos.index_documentacion',['data' => $data]);
	}
}
