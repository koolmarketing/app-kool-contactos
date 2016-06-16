<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpsateCostosTableComentariosCosto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('costos', function($table)
       {         
        $table->text('comentarios_costo')->nullable();   

    });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('costos', function ($table) {
        $table->dropColumn('comentarios_costo');            
    });
   }
}
