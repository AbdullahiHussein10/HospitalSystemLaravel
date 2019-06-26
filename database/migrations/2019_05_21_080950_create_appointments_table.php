<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('doctors_id');
            $table->UnsignedBigInteger('patients_id');
            
            $table->date('appointment_date');
            $table->string('appointment_time');
            $table->string('appointment_duration');
            $table->string('appointment_charges');
            
            $table->string('description');
            $table->timestamps();

        
        
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
        Schema::dropIfExists('appointments');
    }
}
