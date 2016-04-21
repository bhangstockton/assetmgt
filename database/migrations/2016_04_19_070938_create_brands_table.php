<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 
    {
        Schema::create('brands', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pro_line');
            $table->string('createdby');
            $table->string('updatedby');
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
        Schema::drop('brands');
    }
}
