<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmOportunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('crm')->create('oportunidades', function(Blueprint $table){
            $table->increments('id');
            $table->text('nombre');
            $table->text('informacion_contacto');
            $table->decimal('calificacion',2, 1)->nullable(); 
            $table->text('categoria');
            $table->integer('status')->nullable();
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
        Schema::connection('crm')->create('oportunidades', function(Blueprint $table){
            Schema::drop('retencion_fuente');
        });
    }
}
