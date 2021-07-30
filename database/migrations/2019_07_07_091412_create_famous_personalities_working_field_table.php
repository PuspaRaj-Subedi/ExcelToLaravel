<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamousPersonalitiesWorkingFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famous_personalities_working_field', function (Blueprint $table) {
            $table->integer('FP_WF_ID')->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
    }

//CREATE TABLE IF NOT EXISTS `Wada Schema`.`FamousPersonalities_WorkingField` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`WF_ID` INT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//PRIMARY KEY (`WF_ID`))
//ENGINE = InnoDB

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('famous_personalities_working_field');
    }
}
