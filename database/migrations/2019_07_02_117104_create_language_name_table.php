<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_name', function (Blueprint $table) {
            $table->integer('L_N_ID')->nullable(false)->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Language_Name` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `L_N_ID` INT NOT NULL,
//   `Name` VARCHAR(45) NOT NULL,
//   PRIMARY KEY (`L_N_ID`))
// ENGINE = InnoDB
     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_name');
    }
}
