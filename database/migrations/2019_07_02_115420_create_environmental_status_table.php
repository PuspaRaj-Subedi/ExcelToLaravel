<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvironmentalStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environmental_status', function (Blueprint $table) {
            $table->bigInteger('ES_ID')->nullable(false)->autoIncrement();
            $table->date('dateFrom')->nullable(false);
            $table->date('dateTo')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->text('reason');
            $table->integer('affectedPopulation')->nullable(false)->default(0);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('ES_Ty_ID')->on('environmental_status_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`EnvironmentalStatus` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`ES_ID` BIGINT NOT NULL,
//`DateFrom` DATE NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`DateTo` DATE NOT NULL COMMENT '0: People / Life\n1: Property\n',
//`Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//`Reason` TEXT NOT NULL,
//`AffectedPopulation` INT NULL COMMENT '0: People\n1: Property\n',
//PRIMARY KEY (`ES_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_Es_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`EnvironmentalStatus_Type` (`ES_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_ES_F`
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
        Schema::dropIfExists('environmental_status');
    }
}
