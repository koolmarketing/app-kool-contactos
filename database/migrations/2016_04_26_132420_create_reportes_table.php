<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reportes', function(Blueprint $table)
    {  
            $table->increments('id');
            $table->integer('id_user')->nullable();
            $table->string('actividad')->nullable();      
            $table->string('cliente')->nullable();
            $table->timestamp('inicio')->nullable();
            $table->timestamp('fin')->nullable();            
            $table->integer('porcentaje')->nullable();
            $table->text('nota')->nullable();
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
        Schema::drop('reportes');
    }
}
