<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAnotacionesTable extends Migration
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
        $table->string('comprobante')->nullable();   

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
            $table->dropColumn('comprobante');            
        });
    }
}
