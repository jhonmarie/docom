<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateData extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function($table){
            $table->increments('id');
            $table->string('recieveby');
            $table->string('for');
            $table->string('office');
            $table->string('address');
            $table->string('sub');
            $table->rememberToken();
            $table->timestamps();
        });
//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
//
    }

}


