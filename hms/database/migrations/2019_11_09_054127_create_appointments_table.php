<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
             $table->string('Patient_Name');
             $table->date('Date_Of_Birth');
             $table->string('Age');
             $table->string('Phone');
             $table->string('Email');
             $table->string('Gender');
             $table->longText('Address');
             $table->string('picture')->nullable();
             $table->Integer('doctor_id');
             $table->date('appointment_date');
             $table->string('token_number');
             $table->string('problem');
             $table->string('status')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
