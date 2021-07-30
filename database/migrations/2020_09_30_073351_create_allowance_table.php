<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllowanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowance', function (Blueprint $table) {
            $table->bigInteger('Al_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('P_ID')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->integer('perMonth')->nullable(false);
            $table->date('sd');
            $table->timestamps();

//            $table->foreign('type')->references('Al_Ty_ID')->on('allowance_type');
//            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allowance');
    }
}
