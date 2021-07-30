<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session', function (Blueprint $table) {
            $table->bigInteger('Ses_ID')->autoIncrement();
            $table->integer('U_ID');
            $table->string('hash')->nullable();
            $table->string('cookie')->nullable();
            $table->string('session')->nullable();
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
        Schema::dropIfExists('session');
    }
}
