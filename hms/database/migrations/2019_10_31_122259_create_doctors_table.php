<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
    $table->bigIncrements('id');
   $table->string('doctor_name');
   $table->Integer('department_id');
   $table->date('date_of_birth');
   $table->string('experience');
   $table->string('age');
   $table->string('phone');
   $table->string('email');
   $table->string('gender');
   $table->longText('doctor_details');
   $table->longText('address');
   $table->string('picture');
   $table->timestamps();
   //$table->foreign('department_id')->references('id')->on('department')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
