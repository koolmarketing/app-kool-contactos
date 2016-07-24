<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmpresasTipoEmpresaNumeroEmpleados extends Migration
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
        $table->string('tipo_empresa')->nullable(); 
        $table->string('numero_empleados')->nullable(); 
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
            $table->dropColumn('tipo_empresa');
            $table->dropColumn('numero_empleados');
        });
    }
}
