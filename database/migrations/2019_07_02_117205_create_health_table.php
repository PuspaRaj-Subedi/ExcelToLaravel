<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health', function (Blueprint $table) {
            $table->bigInteger('H_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('P_ID')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->date('startedDate')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('type')->references('H_Ty_ID')->on('health_type');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
// CREATE TABLE IF NOT EXISTS `Wada Schema`.`Health` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `H_ID` BIGINT NOT NULL,
//   `P_ID` BIGINT NOT NULL,
//   `Type` INT NOT NULL,
//   PRIMARY KEY (`H_ID`),
//   INDEX `fk_H_Ty_idx` (`Type` ASC) VISIBLE,
//   INDEX `fk_H_P_idx` (`P_ID` ASC) VISIBLE,
//   CONSTRAINT `fk_H_Ty`
//     FOREIGN KEY (`Type`)
//     REFERENCES `Wada Schema`.`Health_Type` (`H_Ty_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_H_P`
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
        Schema::dropIfExists('health');
    }
}
