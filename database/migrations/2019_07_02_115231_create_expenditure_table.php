<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenditureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenditure', function (Blueprint $table) {
            $table->bigInteger('Ex_ID')->nullable(false)->autoIncrement();
            $table->integer('monthly')->nullable(false)->default(0);
            $table->integer('yearly')->nullable(false)->default(0);
            $table->integer('source')->nullable(false);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('source')->references('Ex_S_ID')->on('expenditure_source');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Expenditure` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Ex_ID` BIGINT NOT NULL,
//`Monthly` TINYINT NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`Yearly` INT NOT NULL,
//`Source` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`Ex_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Source` ASC) VISIBLE,
//CONSTRAINT `fk_Ex_S`
//FOREIGN KEY (`Source`)
//REFERENCES `Wada Schema`.`Expenditure_Source` (`Ex_Sc_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_Ex_F`
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
        Schema::dropIfExists('expenditure');
    }
}
