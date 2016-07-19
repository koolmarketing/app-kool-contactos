<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmpresasWordpressPrestashopTable extends Migration
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
        $table->text('wordpress')->nullable();
        $table->text('prestashop')->nullable();
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
        $table->dropColumn('wordpress');
        $table->dropColumn('prestashop');
    });
}
}
