<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivo_Cliente;
use App\Http\Requests;
use Redirect;
use Auth;
use Session;
use Validator;

class DocumentosController extends Controller
{
	public function Index()
	{
		$data = (object) array("page" => "Documentos");
		return view('documentos.index_documentacion',['data' => $data]);
	}

	public function GuardarDocumentoEmpresa(Request $request)
	{

		$destinationPath = 'uploads/comprobantes/';
		if ($request->hasFile('archivo')) {
			$file = $request->file('archivo');
			$destinationPath = 'uploads/comprobantes';
			$extension = $file->getClientOriginalExtension();
			$filename1 = "dc_".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename1);           
		}

		$DOC   = new \App\Archivo_Cliente;

		if (!empty($filename1)) {
			$DOC->ruta      = $filename1;
			$DOC->tipo_archivo = $extension;
		}
		$DOC->titulo       = $request->input('titulo');
		$DOC->descripcion  = $request->input('descripcion');
		$DOC->id_cliente   = $request->input('id_perfil');
		$DOC->id_perfil    = Auth::id();
		$DOC->save();

		return Redirect::back();
	}
	public function AllDocuments($id){
		$Docs = \App\Archivo_Cliente::where('id_cliente', $id)->orderBy('id', 'desc')->get();
		return view('documentos.documentos_perfil_empresa',['docs'=>$Docs]);
	}
}
