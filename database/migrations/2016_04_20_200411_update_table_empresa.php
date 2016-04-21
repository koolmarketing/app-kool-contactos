<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('empresas', function($table)
        {         
            $table->string('foto')->nullable();
            $table->string('fecha_fundacion')->nullable();           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('empresas', function ($table) {
            $table->dropColumn('foto');
            $table->dropColumn('fecha_fundacion');            
        });
    }
}
