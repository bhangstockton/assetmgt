<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PoDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('po_id');
            $table->string('item_name');
            $table->string('item_desc');
            $table->integer('item_qty');
            $table->string('item_unit');
            $table->decimal('item_unit_price',5,2);
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
        Schema::drop('po_details');
    }
}
