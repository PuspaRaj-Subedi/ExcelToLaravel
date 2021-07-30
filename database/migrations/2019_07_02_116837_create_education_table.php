<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigInteger('E_ID')->autoIncrement();
            $table->integer('subject');
            $table->integer('schoolCampus');
            $table->integer('level');
            $table->boolean('continued');
            $table->bigInteger('P_ID');
            $table->timestamps();

            $table->foreign('subject')->references('E_Su_ID')->on('education_subject');
            $table->foreign('schoolCampus')->references('E_SC_ID')->on('education_school_campus');
            $table->foreign('level')->references('E_L_ID')->on('education_level');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Education` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`E_ID` BIGINT NOT NULL,
//`P_ID` BIGINT NOT NULL,
//`Subject` INT NOT NULL,
//`SchoolCampus` INT NOT NULL,
//`Level` INT NOT NULL,
//`Continued` TINYINT NOT NULL,
//PRIMARY KEY (`E_ID`),
//INDEX `fk_E_P_ID_idx` (`P_ID` ASC) VISIBLE,
//INDEX `fk_E_Su_ID_idx` (`Subject` ASC) VISIBLE,
//INDEX `fk_E_S_ID_idx` (`SchoolCampus` ASC) VISIBLE,
//INDEX `fk_E_L_ID_idx` (`Level` ASC) VISIBLE,
//CONSTRAINT `fk_E_P_ID`
//FOREIGN KEY (`P_ID`)
//REFERENCES `Wada Schema`.`Person` (`P_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_E_Su_ID`
//FOREIGN KEY (`Subject`)
//REFERENCES `Wada Schema`.`Education_Subject` (`E_Su_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_E_S_ID`
//FOREIGN KEY (`SchoolCampus`)
//REFERENCES `Wada Schema`.`Edcuation_SchoolCampus` (`E_Sc_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_E_L_ID`
//FOREIGN KEY (`Level`)
//REFERENCES `Wada Schema`.`Education_Level` (`E_L_ID`)
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
        Schema::dropIfExists('education');
    }
}
