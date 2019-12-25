<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birthreports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('appointment_id');
            $table->date('date');
            $table->string('title');
            $table->string('description');
           $table->Integer('doctor_id');
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
        Schema::dropIfExists('birthreports');
    }
}
