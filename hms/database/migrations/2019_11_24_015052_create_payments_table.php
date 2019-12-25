<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('appointment_id');
            $table->string('Patient_Name');
            $table->integer('department_id');
            $table->integer('doctor_id');
            $table->date('adminssion_date')->nullable();
            $table->date('discharge_date')->nullable();
            $table->string('first_service_name')->nullable();
            $table->string('first_service_cost')->nullable();
            $table->string('second_service_name')->nullable();
            $table->string('second_service_cost')->nullable();
            $table->string('third_service_name')->nullable();
            $table->string('third_service_cost')->nullable();
            $table->string('cost_of_treatment')->nullable();
            $table->string('advance_paid')->nullable();
            $table->string('due_payment')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('card_no')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
