<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patients_id')->unsigned();
            $table->integer('appointments_charges');
            $table->integer('room_charges');
            $table->integer('pharmacy_charges');
            $table->integer('total_charges');
            $table->timestamps();
        });

        schema::table('bills', function(Blueprint $table){
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
        Schema::dropIfExists('bills');
    }
}
