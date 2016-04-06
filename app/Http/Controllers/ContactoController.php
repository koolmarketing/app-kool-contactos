<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactoController extends Controller
{

   public function NewContact()
   {
       $data = (object) array("page" => "Nuevo Contacto");
       return view('contactos.nuevo',['data' => $data]);
   }

    public function NewCompany()
    {
        $data = (object) array("page" => "Nueva Empresa");
        return view('empresas.nuevo',['data' => $data]);
    }
    public function Company ()
    {
        $data = (object) array("page" => "Nueva Empresa");
        return view('empresas.empresa',['data' => $data]);
    }
}
