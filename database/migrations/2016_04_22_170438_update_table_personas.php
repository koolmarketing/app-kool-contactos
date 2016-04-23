<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personas', function($table)
        {         
            $table->text('familia')->nullable();
            $table->string('aniversario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personas', function ($table) {
            $table->dropColumn('familia');
            $table->dropColumn('aniversario');
        });
    }
}
