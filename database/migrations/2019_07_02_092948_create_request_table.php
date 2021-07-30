<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->bigInteger('Req_ID')->autoIncrement();
            $table->string('token');
            $table->timestamp('expire');
            $table->enum('type',['reset','email']);
            $table->integer('U_ID');
            $table->timestamps();

            $table->foreign('U_ID')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
