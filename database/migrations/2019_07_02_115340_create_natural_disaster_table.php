<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaturalDisasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('natural_disaster', function (Blueprint $table) {
            $table->bigInteger('ND_ID')->nullable(false)->autoIncrement();
            $table->date('dateFrom')->nullable(false);
            $table->date('dateTo')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->string('lossQuantity')->nullable(false);
            $table->boolean('lossType')->nullable(false)->comment('0: People\n1: Property\n');
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('ND_Ty_ID')->on('natural_disaster_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`NaturalDisaster` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`ND_ID` BIGINT NOT NULL,
//`DateFrom` DATE NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`DateTo` DATE NOT NULL COMMENT '0: People / Life\n1: Property\n',
//`Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//`LossQuantity` VARCHAR(45) NOT NULL,
//`LossType` TINYINT(2) NULL COMMENT '0: People\n1: Property\n',
//PRIMARY KEY (`ND_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_ND_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`NaturalDisaster_Type` (`ND_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_ND_F`
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
        Schema::dropIfExists('natural_disaster');
    }
}
