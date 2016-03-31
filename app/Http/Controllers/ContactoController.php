<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactoController extends Controller
{

   public function nuevo()
   {
       return view('contactos.nuevo');
   }
}
