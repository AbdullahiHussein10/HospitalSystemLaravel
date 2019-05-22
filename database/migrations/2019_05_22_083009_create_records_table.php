<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patients_id')->unsigned();
            $table->unsignedBigInteger('diagnosis_id')->unsigned();
            $table->unsignedBigInteger('visits_id')->unsigned();
            $table->timestamps();
        });

        schema::table('records', function(Blueprint $table){
            $table->foreign('patients_id')->references('id')->on('patients');
            $table->foreign('diagnosis_id')->references('id')->on('diagnosis');
            $table->foreign('visits_id')->references('id')->on('visits');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
