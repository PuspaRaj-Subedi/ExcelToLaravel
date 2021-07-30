<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeathReasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('death_reason', function (Blueprint $table) {
            $table->integer('De_R_ID')->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
    }

//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Death_Reason` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`De_R_ID` INT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//PRIMARY KEY (`De_R_ID`))
//ENGINE = InnoDB

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('death_reason');
    }
}
