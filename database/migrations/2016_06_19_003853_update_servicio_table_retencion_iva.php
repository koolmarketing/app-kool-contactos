<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateServicioTableRetencionIva extends Migration
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
        $table->text('titulo_retencion')->nullable();  
        $table->decimal('iva',5, 2)->nullable();
        $table->decimal('valor_retencion',10,2)->nullable(); 
        $table->decimal('valor_iva',10,2)->nullable(); 
        $table->decimal('costos',10,2)->nullable();          
        $table->text('comentarios_servicio')->nullable();   
        $table->decimal('utilidad_neta',10,2)->nullable();

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
            $table->dropColumn('titulo_retencion');   
            $table->dropColumn('iva'); 
            $table->dropColumn('valor_retencion'); 
            $table->dropColumn('valor_iva'); 
            $table->dropColumn('costos'); 
            $table->dropColumn('comentarios_servicio');   
            $table->dropColumn('utilidad_neta');       
        });
    }
}
