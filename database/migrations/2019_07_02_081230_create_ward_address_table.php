<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_address', function (Blueprint $table) {
            $table->integer('WA_ID')->nullable(false)->autoIncrement();
            $table->string('name');
            $table->integer('Province');
            $table->integer('District');
            $table->integer('Nagar');
            $table->integer('Ward');
            $table->timestamps();

            $table->foreign('Province')->references('Pr_ID')->on('province');
            $table->foreign('District')->references('Ds_ID')->on('district');
            $table->foreign('Nagar')   ->references('Ng_ID')->on('nagar');
            $table->foreign('Ward')    ->references('Wd_ID')->on('ward');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ward_address');
    }
}
