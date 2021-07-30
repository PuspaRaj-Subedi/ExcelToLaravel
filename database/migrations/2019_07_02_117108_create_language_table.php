<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->bigInteger('L_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('P_ID')->nullable(false);
            $table->integer('name');
            $table->timestamps();

            $table->foreign('name')->references('L_N_ID')->on('language_name');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Language` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `L_ID` INT NOT NULL,
//   `P_ID` BIGINT NULL,
//   `Name` INT NOT NULL,
//   PRIMARY KEY (`L_ID`),
//   INDEX `fk_L_P_ID_idx` (`P_ID` ASC) VISIBLE,
//   INDEX `fk_L_N_ID_idx` (`Name` ASC) VISIBLE,
//   CONSTRAINT `fk_L_N_ID`
//     FOREIGN KEY (`Name`)
//     REFERENCES `Wada Schema`.`Language_Name` (`L_N_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_L_P_ID`
//     FOREIGN KEY (`P_ID`)
//     REFERENCES `Wada Schema`.`Person` (`P_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION)
// ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language');
    }
}
