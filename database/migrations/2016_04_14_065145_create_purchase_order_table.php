<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('purchase_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('po_ref_no');
            $table->date('date_req');
            $table->string('requesting_per');
            $table->string('approving_per');
            $table->date('date_approved');
            $table->string('remarks');

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
        Schema::drop('purchase_order');
    }
}
