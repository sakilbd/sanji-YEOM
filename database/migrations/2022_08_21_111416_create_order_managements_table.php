<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id');
            $table->integer('quantity');
            $table->integer('client_id');
            $table->string('order_status');
            $table->integer('total_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_managements');
    }
}
