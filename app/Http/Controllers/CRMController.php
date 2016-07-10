<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CRMController extends Controller
{
    public function index()
    {
    	$data = (object) array("page" => "CRM");
    	return view('CRM.iniciocrm',['data' => $data]);
    }
    public function ViewOportunidad(){
    	return view('CRM.modals.oportunidad');
    }
}
