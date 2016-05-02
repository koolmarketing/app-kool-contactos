<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectoresEconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores_economicos', function(Blueprint $table)
        {
           $table->increments('id');
           $table->string('nombre');
           $table->string('tipo')->nullable();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     {
        Schema::drop('sectores_economicos');
    }
}
}
