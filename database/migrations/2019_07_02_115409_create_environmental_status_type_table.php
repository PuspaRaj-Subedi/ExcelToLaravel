<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvironmentalStatusTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environmental_status_type', function (Blueprint $table) {
            $table->integer('ES_Ty_ID')->nullable(false)->autoIncrement();
            $table->string('name')->nullable(false);
            $table->timestamps();
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`EnvironmentalStatus_Type` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`ES_Ty_ID` INT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//PRIMARY KEY (`ES_Ty_ID`))
//ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environmental_status_type');
    }
}
