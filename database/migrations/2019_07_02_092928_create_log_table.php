<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->bigInteger('Lg_ID')->nullable(false)->autoIncrement();
            $table->ipAddress('ip')->nullable('false');
            $table->string('type');
            $table->text('details');
            $table->string('table')->nullable(false);
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
        Schema::dropIfExists('log');
    }
}
