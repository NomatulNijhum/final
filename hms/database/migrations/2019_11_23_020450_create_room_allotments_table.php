<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAllotmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allotments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('token_number');
            $table->string('Patient_Name');
            $table->string('Date_Of_Birth')->nullable();
            $table->string('Age')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('gender')->nullable();
            $table->string('Address')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->string('appointment_date')->nullable();
            $table->string('Problem')->nullable();
            $table->Integer('room_number');
            $table->Integer('roomtype_id');
            $table->date('allot_date')->nullable();
            $table->date('discharge_date')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_allotments');
    }
}
