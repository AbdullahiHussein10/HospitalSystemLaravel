<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('patients_id');
            $table->string('bloodpressure');
            $table->string('respiratoryrate');
            $table->string('temperature');
            $table->string('heartrate');
            $table->string('sugarlevel');
            $table->string('disability');
            $table->string('weight');
            $table->string('height');
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
        Schema::dropIfExists('checkups');
    }
}
