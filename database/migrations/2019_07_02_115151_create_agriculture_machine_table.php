<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgricultureMachineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agriculture_machine', function (Blueprint $table) {
            $table->bigInteger('AM_ID')->nullable(false)->autoIncrement();
            $table->boolean('bought')->nullable(false)->default(false)->comment('0: Not Bought\n1: Bought\n');
            $table->text('rate')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('AM_Ty_ID')->on('agriculture_machine_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`AgricultureMachine` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`AM_ID` BIGINT NOT NULL,
//`Bought` TINYINT NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`Rate` INT NOT NULL,
//`Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`AM_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_AM_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`AgricultureMachine_Type` (`AM_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_AM_F`
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
        Schema::dropIfExists('agriculture_machine');
    }
}
