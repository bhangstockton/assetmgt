<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function($table) {
            $table->string('suffix');
            $table->string('position');
            $table->char('sex',1);
            $table->string('remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function ($table) {
            $table->dropColumn('suffix');
            $table->dropColumn('position');
            $table->dropColumn('sex');
            $table->dropColumn('remarks');
        });
    }
}
