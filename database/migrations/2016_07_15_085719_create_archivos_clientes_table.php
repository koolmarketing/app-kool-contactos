<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('archivos_clientes', function(Blueprint $table){
        $table->increments('id');
        $table->string('titulo')->nullable();
        $table->string('ruta')->nullable();
        $table->string('tipo_archivo')->nullable();
        $table->text('descripcion')->nullable();  
        $table->integer('id_cliente')->nullable();
        $table->integer('id_perfil')->nullable();
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
        
        Schema::drop('archivos_clientes');
        
    }
}
