<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRetencionEnLaFuente2016 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retencion_fuente', function(Blueprint $table){

        $table->increments('id');
        $table->string('concepto')->nullable();
        $table->integer('base_uvt')->nullable();
        $table->string('base_pesos')->nullable();
        $table->decimal('tarifas',5, 2)->nullable();  
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
        Schema::drop('retencion_fuente');
    }
}
