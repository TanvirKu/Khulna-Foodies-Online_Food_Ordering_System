<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makeOrder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('contact_no');
            $table->string('address');
            $table->integer('item_id');
            $table->integer('quantity');
            $table->double('total');
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
        Schema::drop('makeOrder');
    }
}
