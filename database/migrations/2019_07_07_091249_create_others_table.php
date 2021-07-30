<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->bigInteger('O_ID')->autoIncrement();
            $table->string('name');
            $table->string('cname');
            $table->string('address');
            $table->string('contact');
            $table->integer('type');
            $table->integer('staffM');
            $table->integer('staffF');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('type')->references('O_Ty_ID')->on('others_type');
            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Others` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`O_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`Wa_ID` INT NOT NULL,
//`Type` INT NOT NULL,
//`Contact` VARCHAR(10) NOT NULL,
//`StaffF` SMALLINT NOT NULL,
//`StaffM` SMALLINT NOT NULL,
//PRIMARY KEY (`O_ID`),
//INDEX `fk_O_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//INDEX `fk_O_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_O_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_O_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`Others_Type` (`Ty_ID`)
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
        Schema::dropIfExists('others');
    }
}
