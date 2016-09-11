<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateItemVendedorServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('servicios', function($table)
       { 
        $table->integer('vendedor')->nullable(); 
        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('servicios', function ($table) {
            $table->dropColumn('vendedor');            
        });
    }
}
