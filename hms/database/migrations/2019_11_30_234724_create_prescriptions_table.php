<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
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
            $table->string('patienttype')->nullable();
            $table->integer('medicine_id')->nullable();
            $table->string('fmedicine_times')->nullable();
            $table->string('fmedicine_dose')->nullable();
            $table->string('fmedicine_instruction')->nullable();
            $table->string('smedicine_name')->nullable();
            $table->string('smedicine_times')->nullable();
            $table->string('smedicine_dose')->nullable();
            $table->string('smedicine_instruction')->nullable();
            $table->string('tmedicine_name')->nullable();
            $table->string('tmedicine_times')->nullable();
            $table->string('tmedicine_dose')->nullable();
            $table->string('tmedicine_instruction')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('visitingfee')->nullable();
            $table->string('patientsnote')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }




}
