<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->bigInteger('In_ID')->autoIncrement();
            $table->integer('income')->default(0);
            $table->integer('saving')->default(0);
            $table->integer('source');
            $table->bigInteger('F_ID');
            $table->timestamps();

            $table->foreign('source')->references('In_S_ID')->on('income_source');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Income` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`In_ID` BIGINT NOT NULL,
//`Monthly` TINYINT NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`Yearly` INT NOT NULL,
//`Source` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`In_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Source` ASC) VISIBLE,
//CONSTRAINT `fk_In_S`
//FOREIGN KEY (`Source`)
//REFERENCES `Wada Schema`.`Income_Source` (`In_Sc_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_In_F`
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
        Schema::dropIfExists('income');
    }
}
