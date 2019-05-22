<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientPharmacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_pharmacy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patients_id')->unsigned();
            $table->unsignedBigInteger('pharmacy_id')->unsigned();
            $table->timestamps();
        });

        schema::table('patient_pharmacy', function(Blueprint $table){
            $table->foreign('patients_id')->references('id')->on('patients');
            $table->foreign('pharmacy_id')->references('id')->on('pharmacy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_pharmacy');
    }
}
