<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function(Blueprint $table)
    {

        $table->increments('id');
        $table->integer('rango')->nullable();   
        $table->string('nombre_comercial')->nullable();  
        $table->string('razon_social')->nullable();
        $table->string('nit')->nullable();
        $table->string('telefono_1')->nullable();
        $table->string('telefono_2')->nullable();
        $table->string('sitio_web')->nullable();
        $table->string('ciudad_pais')->nullable();
        $table->string('direccion')->nullable();   

        $table->text('representante')->nullable();
        $table->text('comercial')->nullable();
        $table->text('soporte')->nullable();

        $table->text('valores')->nullable();
        $table->text('mision')->nullable();
        $table->text('vision')->nullable();

        $table->text('intereses')->nullable();       
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresas');
    }
}
