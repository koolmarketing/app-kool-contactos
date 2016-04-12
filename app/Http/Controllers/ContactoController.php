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
    public function Clientes () {
        $data = (object) array("page" => "Clientes");
        return view('contactos.lista',['data' => $data]);
    }
    
    public function PerfilCliente () {
        $data = (object) array("page" => "Clientes");
        return view('contactos.perfil',['data' => $data]);
    }

    public function PerfilEmpresa () {
        $data = (object) array("page" => "Clientes");
        return view('empresas.perfil',['data' => $data]);
    }
}
