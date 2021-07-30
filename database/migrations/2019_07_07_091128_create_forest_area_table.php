<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForestAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forest_area', function (Blueprint $table) {
            $table->bigInteger('FA_ID')->autoIncrement();
            $table->string('name');
            $table->string('cName');
            $table->string('contact');
            $table->integer('staffM');
            $table->integer('staffF');
            $table->integer('coveredArea');
            $table->integer('type');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('type')->references('FA_Ty_ID')->on('forest_area_type');
            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`ForestArea` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`FA_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`CoveredArea` INT NOT NULL,
//`Type` INT NOT NULL COMMENT '0 : Public\n1:  Private\n2: Government\n',
//`Wa_ID` INT NOT NULL,
//PRIMARY KEY (`FA_ID`),
//INDEX `fk_IA_Ty_idx` (`Type` ASC) VISIBLE,
//INDEX `fk_FA_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_FA_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_FA_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`ForestArea_Type` (`Ty_ID`)
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
        Schema::dropIfExists('forest_area');
    }
}
