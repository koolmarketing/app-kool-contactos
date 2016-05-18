<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('servicios', function(Blueprint $table){

        $table->increments('id');
        $table->integer('id_perfil')->nullable();
        $table->integer('id_usuario')->nullable();
        $table->integer('estado')->nullable();
        $table->string('inicio')->nullable();
        $table->string('fin')->nullable();
        $table->string('titulo')->nullable();
        $table->integer('valor')->nullable();
        $table->integer('saldo')->nullable();
        $table->string('token')->nullable();
        $table->string('comprobante')->nullable();
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
        Schema::drop('servicios');
    }
}
