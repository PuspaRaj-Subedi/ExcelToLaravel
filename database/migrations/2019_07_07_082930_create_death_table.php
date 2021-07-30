<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('death', function (Blueprint $table) {
            $table->bigInteger('De_ID')->autoIncrement();
            $table->integer('reason');
            $table->date('date');
            $table->bigInteger('P_ID');
            $table->timestamps();

            $table->foreign('reason')->references('De_R_ID')->on('death_reason');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }



//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Death` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`De_ID` BIGINT NOT NULL,
//`Date` DATE NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`Reason` INT NOT NULL,
//`P_ID` BIGINT NOT NULL,
//PRIMARY KEY (`De_ID`),
//INDEX `fk_AH_Ty_idx` (`Reason` ASC) VISIBLE,
//INDEX `fk_De_P_idx` (`P_ID` ASC) VISIBLE,
//CONSTRAINT `fk_De_R`
//FOREIGN KEY (`Reason`)
//REFERENCES `Wada Schema`.`Death_Reason` (`De_R_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_De_P`
//FOREIGN KEY (`P_ID`)
//REFERENCES `Wada Schema`.`Person` (`P_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION)
//ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('death');
    }
}
