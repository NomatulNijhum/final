<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

  public function up()

    {

        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token_number');
            $table->string('Patient_Name');
            $table->integer('visitingfee')->nullable();
            $table->integer('medicine_id')->nullable();
            $table->integer('smedicine_name')->nullable();
            $table->integer('tmedicine_name')->nullable();
            $table->integer('roomtype_id')->nullable();
            $table->integer('cost_of_treatment')->nullable();
            $table->string('payment_type')->nullable();
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
        Schema::dropIfExists('prices');
    }

}
