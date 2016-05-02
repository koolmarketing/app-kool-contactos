<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmpresasTable extends Migration
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
            $table->text('gmail')->nullable();
            $table->text('zohomail')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('hootsuite')->nullable();
            $table->text('amarillas_internet')->nullable();    
            $table->text('photosnack')->nullable();
            $table->text('ftp')->nullable();
            $table->string('foto')->nullable();
            $table->string('fecha_fundacion')->nullable();  
            $table->text('servicios')->nullable();
            $table->string('sector')->nullable();  
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
        $table->dropColumn('gmail');
        $table->dropColumn('zohomail');
        $table->dropColumn('facebook');
        $table->dropColumn('twitter');
        $table->dropColumn('youtube');
        $table->dropColumn('instagram');
        $table->dropColumn('linkedin');
        $table->dropColumn('pinterest');
        $table->dropColumn('hootsuite');
        $table->dropColumn('amarillas_internet');
        $table->dropColumn('photosnack');
        $table->dropColumn('ftp');
        $table->dropColumn('foto');
        $table->dropColumn('fecha_fundacion'); 
        $table->dropColumn('servicios');
        $table->dropColumn('sector');  

    });
   }
}
