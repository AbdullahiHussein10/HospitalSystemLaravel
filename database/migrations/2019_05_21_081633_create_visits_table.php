<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('appointments_id')->unsigned();
            $table->unsignedBigInteger('doctors_id')->unsigned();
            $table->unsignedBigInteger('patients_id')->unsigned();
            $table->timestamps();
        });

        schema::table('visits', function(Blueprint $table){
            $table->foreign('appointments_id')->references('id')->on('appointments');
            $table->foreign('doctors_id')->references('id')->on('doctors');
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
        Schema::dropIfExists('visits');
    }
}
