<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_type');
            $table->unsignedBigInteger('nurse_id')->unsigned();
            $table->unsignedBigInteger('patients_id')->unsigned();
            $table->integer('amount_balance');
            $table->timestamps();
        });

        schema::table('rooms',function(Blueprint $table){
            $table->foreign('nurse_id')->references('id')->on('nurses');
            $table->foreign('patients_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
