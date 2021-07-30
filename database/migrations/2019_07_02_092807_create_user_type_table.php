<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        return;
        Schema::create('user_type', function (Blueprint $table) {
            $table->integer('UT_ID')->nullable(false)->autoIncrement();
            $table->integer('UR_ID')->nullable(false);
            $table->string('name');

            $table->timestamps();

            $table->foreign('UR_ID')->references('UR_ID')->on('user_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_type');
    }
}
