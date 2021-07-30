<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbs', function (Blueprint $table) {
            $table->integer('TBS_ID')->nullable(false)->autoIncrement();
            $table->string('name');
            $table->integer('Ga_ID');
            $table->timestamps();

            $table->foreign('Ga_ID')->references('Ga_ID')->on('gaun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbs');
    }
}
