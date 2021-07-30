<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_structure', function (Blueprint $table) {
            $table->bigInteger('HS_ID')->nullable(false)->autoIncrement();
            $table->tinyInteger('floor')->nullable(false)->default(1);
            $table->integer('houseNo');
            $table->integer('totalHouse');
            $table->boolean('roadAccess');
            $table->date('buildDate');
            $table->integer('wall')->nullable(false)->default(0);
            $table->integer('terrace')->nullable(false)->default(0);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('terrace')->references('HS_T_ID')->on('home_structure_terrace');
            $table->foreign('wall')->references('HS_W_ID')->on('home_structure_wall');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`HomeStructure` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`HS_ID` BIGINT NOT NULL,
//`Floor` TINYINT NOT NULL DEFAULT '2' COMMENT '0: Governmental\n1: Public\n2: Private\n',
//`HouseNumber` VARCHAR(20) NULL,
//`BuildDate` DATE NOT NULL,
//`Wall` INT NOT NULL,
//`Terrace` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`HS_ID`),
//INDEX `fk_Tr_Ty_idx` (`Wall` ASC) VISIBLE,
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_HS_T_idx` (`Terrace` ASC) VISIBLE,
//CONSTRAINT `fk_HS_W`
//FOREIGN KEY (`Wall`)
//REFERENCES `Wada Schema`.`HomeStructure_Wall` (`HS_W_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_HS_T`
//FOREIGN KEY (`Terrace`)
//REFERENCES `Wada Schema`.`HomeStructure_Terrace` (`HS_T_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_HS_F`
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
        Schema::dropIfExists('home_structure');
    }
}
