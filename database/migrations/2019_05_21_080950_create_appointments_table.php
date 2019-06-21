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
            $table->UnsignedBiginteger('doctors_id')->unsigned();
            $table->date('appointment_date');
            $table->string('appointment_time');
            $table->string('appointment_duration');
            $table->string('appointment_charges');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->timestamps();

        });

        Schema::table('appointments', function(Blueprint $table){
            $table->foreign('doctors_id')->references('id')->on('doctors');
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
