<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email', function (Blueprint $table) {
            $table->integer('EM_ID')->nullable(false)->autoIncrement();
            $table->string('email')->unique();
            $table->boolean('is_Verified')->nullable(false)->default(false);
            $table->boolean('is_Primary')->nullable(false)->default(false);
            $table->integer('U_ID')->nullable(false);
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
        Schema::dropIfExists('email');
    }
}
