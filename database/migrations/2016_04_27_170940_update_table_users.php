<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table)
        {         
            $table->integer('rol')->nullable();
            $table->integer('activo')->nullable();
            $table->string('fotografia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('rol');
            $table->dropColumn('activo');
            $table->dropColumn('fotografia');
        });

    }
}
