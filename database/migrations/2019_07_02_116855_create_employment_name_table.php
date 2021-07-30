<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_name', function (Blueprint $table) {
            $table->integer('Emp_Nm_ID')->nullable(false)->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
    }
  //   CREATE TABLE IF NOT EXISTS `Wada Schema`.`Employment_Name` (
  // `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  // `update_time` TIMESTAMP NULL,
  // `Emp_Nm_ID` INT NOT NULL,
  // `Name` VARCHAR(45) NOT NULL,
  // PRIMARY KEY (`Emp_Nm_ID`))
  // ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment_name');
    }
}
