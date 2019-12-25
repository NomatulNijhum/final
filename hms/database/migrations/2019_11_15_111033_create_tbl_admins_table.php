<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admins', function (Blueprint $table) {
        
        $table->bigIncrements('admin_id');
        $table->string('admin_name');
        $table->string('admin_address');
        $table->string('admin_email');
        $table->integer('admin_phone');
        $table->string('admin_password');
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
        Schema::dropIfExists('tbl_admins');
    }
}
