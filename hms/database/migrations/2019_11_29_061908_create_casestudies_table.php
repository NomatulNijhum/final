<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasestudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casestudies', function (Blueprint $table) {
            $table->bigIncrements('id');

$table->string('token_number');
$table->string('food_allergies')->nullable();
$table->string('tendency_bleed')->nullable();
$table->string('heart_disease')->nullable();
$table->string('blood_pressure')->nullable();
$table->string('diabetic')->nullable();
$table->string('surgery')->nullable();
$table->string('accident')->nullable();
$table->string('family_medical_history')->nullable();
$table->string('current_medication')->nullable();
$table->string('female_pregnancy')->nullable();
$table->string('breast_feeding')->nullable();
$table->string('others')->nullable();
$table->string('health_insurance')->nullable();
$table->string('low_income')->nullable();
$table->string('reference')->nullable();
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
        Schema::dropIfExists('casestudies');
    }
}
