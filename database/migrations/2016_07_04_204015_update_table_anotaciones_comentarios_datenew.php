<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableAnotacionesComentariosDatenew extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('anotaciones', function($table)
       {         
        $table->dateTime('fecha_comentario')->nullable();   

    });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anotaciones', function ($table) {
            $table->dropColumn('fecha_comentario');            
        });
    }
}
