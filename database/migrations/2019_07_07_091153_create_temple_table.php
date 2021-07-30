<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temple', function (Blueprint $table) {
            $table->bigInteger('Tp_ID')->autoIncrement();
            $table->string('presidentName');
            $table->string('address');
            $table->string('contact');
            $table->integer('type');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('type')->references('Tp_Ty_ID')->on('temple_type');
            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }


//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Temple` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Tp_ID` BIGINT NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`Contact` VARCHAR(10) NOT NULL,
//`Type` INT NOT NULL COMMENT '0 : Public\n1:  Private\n2: Government\n',
//`Wa_ID` INT NOT NULL,
//PRIMARY KEY (`Tp_ID`),
//INDEX `fk_Te_Ty_idx` (`Type` ASC) VISIBLE,
//INDEX `fk_Te_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_Te_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_Te_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`Temple_Type` (`Ty_ID`)
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
        Schema::dropIfExists('temple');
    }
}
