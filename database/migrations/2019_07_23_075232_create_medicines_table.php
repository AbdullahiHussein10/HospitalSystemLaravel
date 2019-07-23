<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('patients_id');
            $table->string('medicine_name');
            $table->string('medicine_category');
            $table->integer('medicine_quantity');
            $table->integer('medicine_price');
            $table->timestamps();
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
        Schema::dropIfExists('medicines');
    }
}
