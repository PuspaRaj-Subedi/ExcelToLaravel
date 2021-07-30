<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamousPersonalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famous_personalities', function (Blueprint $table) {
            $table->bigInteger('FP_ID')->autoIncrement();
            $table->string('name');
            $table->string('address');
            $table->json('awardsReceived')->comment("{'awards':{'First','Seconds'}}");
            $table->integer('workingField');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('workingField')->references('FP_WF_ID')->on('famous_personalities_working_field');
            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`FamousPersonalities` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`FP_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`AwardsAcieved` TEXT NOT NULL COMMENT '0 : Kacchi\n1:  Pakki / Pitched\n2: Gravelled\n',
//`Wa_ID` INT NOT NULL,
//`WorkingField` INT NULL,
//PRIMARY KEY (`FP_ID`),
//INDEX `fk_FP_WF_idx` (`WorkingField` ASC) VISIBLE,
//INDEX `fk_FP_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_FP_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_FP_WF`
//FOREIGN KEY (`WorkingField`)
//REFERENCES `Wada Schema`.`FamousPersonalities_WorkingField` (`WF_ID`)
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
        Schema::dropIfExists('famous_personalities');
    }
}
