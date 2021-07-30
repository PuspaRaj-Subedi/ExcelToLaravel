<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrialAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrial_area', function (Blueprint $table) {
            $table->bigInteger('IA_ID')->autoIncrement();
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->integer('type');
            $table->integer('staffM');
            $table->integer('staffF');
            $table->boolean('is_Running');
            $table->string('ownersName');
            $table->bigInteger('investment');
            $table->boolean('shares');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('type')->references('IA_Ty_ID')->on('industrial_area_type');
            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`IndustrialArea` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`IA_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`Contact` VARCHAR(10) NOT NULL,
//`Type` INT NOT NULL COMMENT '0 : Public\n1:  Private\n2: Government\n',
//`Wa_ID` INT NOT NULL,
//`StaffM` SMALLINT NOT NULL,
//`StaffF` SMALLINT NOT NULL,
//`OwnersName` VARCHAR(45) NOT NULL,
//`is_Running` TINYINT(2) NOT NULL,
//PRIMARY KEY (`IA_ID`),
//INDEX `fk_IA_Ty_idx` (`Type` ASC) VISIBLE,
//INDEX `fk_IA_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_IA_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_IA_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`IndustrialArea_Type` (`Ty_ID`)
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
        Schema::dropIfExists('industrial_area');
    }
}
