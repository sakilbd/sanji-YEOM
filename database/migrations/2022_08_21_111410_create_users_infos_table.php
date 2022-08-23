<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('surname');
            $table->string('email');
            $table->string('pass');
            $table->string('user_role');
            $table->string('country');
            $table->integer('contact_number');
            $table->integer('credit_card_number');
            $table->integer('pin');
            $table->integer('gender');
            $table->integer('card_balance');
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
        Schema::dropIfExists('users_infos');
    }
}
