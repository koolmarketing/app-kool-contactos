<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('personas', function(Blueprint $table)
       {

        $table->increments('id');
        $table->string('foto')->nullable();   
        $table->string('cumpleaños')->nullable();
        $table->string('sexo')->nullable(); 
        $table->string('nombres')->nullable();
        $table->string('apellidos')->nullable();
        $table->string('ciudad_actual')->nullable();
        $table->string('ciudad_natal')->nullable();        
        $table->string('profesión')->nullable();
        $table->string('empresa_actual')->nullable();
        $table->string('cargo')->nullable();
        $table->string('telefono_oficina')->nullable();
        $table->string('telefono_casa')->nullable();
        $table->string('telefono_movil')->nullable();
        $table->string('email_corporativo')->nullable();
        $table->string('email_personal')->nullable();
        $table->string('skype')->nullable();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('linkedin')->nullable();
        $table->text('hobbits')->nullable();
        $table->string('religion')->nullable();
        $table->string('situacion_sentimental')->nullable();
        $table->string('orientacion_sexual')->nullable();
         
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
        Schema::drop('personas');
    }
}
