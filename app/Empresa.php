<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sleimanx2\Plastic\Searchable;

class Empresa extends Model
{
	use Searchable;
	protected $table='empresas';


	public $searchable = ['id','nombre_comercial','nit','sitio_web'];

	public function buildDocument()
	{
		return [
		'id'              => $this->id,
		'nombre_comercial'=> $this->nombre_comercial
		];
	}
	public $syncDocument = false;


}
