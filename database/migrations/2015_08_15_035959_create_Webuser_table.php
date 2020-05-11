<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void  
     */
    public function up()
    {
        Schema::create('Webusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName',30);
            $table->string('email',30);
            $table->string('password',15);
            $table->string('Phone_No',20);
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
        Schema::drop('Webusers');
    }
}
