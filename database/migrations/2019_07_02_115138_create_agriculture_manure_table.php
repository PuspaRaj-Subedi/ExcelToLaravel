<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgricultureManureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agriculture_manure', function (Blueprint $table) {
            $table->bigInteger('AgM_ID')->nullable(false)->autoIncrement();
            $table->integer('quantity')->nullable(false)->default(0);
            $table->text('effects')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->boolean('typeA')->nullable(false)->default(false)->comment('0: Home made\n1: Bought\n');
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('AgM_Ty_ID')->on('agriculture_manure_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`AgricultureManure` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Ag_ID` BIGINT NOT NULL,
//`Quantity` INT NOT NULL,
//`Effects` TEXT NOT NULL,
//`Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//`TypeA` TINYINT(2) NOT NULL COMMENT '0: Home made\n1: Bought\n',
//PRIMARY KEY (`Ag_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_Ag_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`AgricultureManure_Type` (`Pr_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_Ag_F`
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
        Schema::dropIfExists('agriculture_manure');
    }
}
