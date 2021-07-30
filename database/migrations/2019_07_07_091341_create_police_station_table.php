<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliceStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('police_station', function (Blueprint $table) {
            $table->bigInteger('PS_ID')->autoIncrement();
            $table->string('name');
            $table->string('chiefName');
            $table->string('address');
            $table->string('contact');
            $table->integer('staffM');
            $table->integer('staffF');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`PoliceStation` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`PS_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`Contact` VARCHAR(10) NOT NULL,
//`StaffF` INT NOT NULL COMMENT '0 : Kacchi\n1:  Pakki / Pitched\n2: Gravelled\n',
//`Wa_ID` INT NOT NULL,
//`StaffM` INT NULL,
//`HeadOfficer` VARCHAR(45) NULL,
//PRIMARY KEY (`PS_ID`),
//INDEX `fk_PS_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_PS_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
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
        Schema::dropIfExists('police_station');
    }
}
