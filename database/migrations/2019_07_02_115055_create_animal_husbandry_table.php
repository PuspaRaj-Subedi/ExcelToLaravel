<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalHusbandryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_husbandry', function (Blueprint $table) {
            $table->bigInteger('AH_ID')->nullable(false)->autoIncrement();
            $table->integer('income')->nullable(false)->default(0);
            $table->integer('invest')->nullable(false)->default(0);
            $table->integer('profit')->nullable(false)->default(0);
            $table->integer('number')->nullable(false)->default(1);
            $table->integer('type')->nullable(false);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('AH_Ty_ID')->on('animal_husbandry_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`AnimalHusbandry` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`AH_ID` BIGINT NOT NULL,
//`Invest` INT NOT NULL,
//`Income` INT NOT NULL,
//`Number` SMALLINT NOT NULL,
//`Profit` INT NOT NULL,
//`Type` INT NULL,
//`F_ID` BIGINT NULL,
//PRIMARY KEY (`AH_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_AH_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`AnimalHusbandry_Type` (`AH_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_AH_F`
//FOREIGN KEY (`F_ID`)
//REFERENCES `Wada Schema`.`Family` (`F_ID`)
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
        Schema::dropIfExists('animal_husbandry');
    }
}
