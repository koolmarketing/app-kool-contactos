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
            $table->text('involucrados')->nullable();
            $table->integer('id_perfil')->nullable();
            
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
            $table->dropColumn('involucrados');
            $table->dropColumn('id_perfil');
        });
    }
}
