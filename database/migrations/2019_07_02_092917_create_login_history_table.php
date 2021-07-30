<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_history', function (Blueprint $table) {
            $table->unsignedBigInteger('LH_ID')->nullable(false)->autoIncrement();
            $table->integer('U_ID')->nullable(false);
            $table->ipAddress('ip')->nullable(false);
            $table->enum('type',['login','logout'])->nullable(false);
            $table->timestamps();

            $table->foreign('U_ID')->references('id')->on('users');

//            $table->engine("INNODB");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_history');
    }
}
