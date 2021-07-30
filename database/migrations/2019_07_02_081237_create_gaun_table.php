<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaun', function (Blueprint $table) {
            $table->integer('Ga_ID')->nullable(false)->autoIncrement();
            $table->string('name');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaun');
    }
}
