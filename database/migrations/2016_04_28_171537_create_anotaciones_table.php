<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnotacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('anotaciones', function(Blueprint $table)
      {  
        $table->increments('id');
        $table->text('mensaje');
        $table->integer('id_creador');
        $table->timestamp('fecha_cobro')->nullable();
        $table->timestamp('fecha_vencimiento')->nullable();
        $table->string('serial')->nullable();
        $table->integer('monto')->nullable();
        $table->integer('estado')->nullable();
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
        Schema::drop('anotaciones');
    }
}
