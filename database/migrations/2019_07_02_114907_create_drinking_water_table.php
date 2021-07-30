<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinkingWaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinking_water', function (Blueprint $table) {
            $table->bigInteger('DW_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('F_ID')->nullable(false);
            $table->integer('source')->nullable(false);
            $table->integer('distance')->nullable(false);
            $table->integer('time')->nullable(false)->comment('in minutes');
            $table->boolean('is_Available')->nullable(false)->default(true)->comment('At your home');
            $table->timestamps();

            $table->foreign('source')->references('DW_S_ID')->on('drinking_water_source');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }


//CREATE TABLE IF NOT EXISTS `Wada Schema`.`DrinkingWater` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`DW_ID` BIGINT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//`Source` INT NOT NULL,
//`Distance` INT NOT NULL,
//`Time` INT NOT NULL COMMENT 'in hours\n',
//`is_Available` TINYINT(2) NOT NULL COMMENT 'At your own home\n',
//PRIMARY KEY (`DW_ID`),
//INDEX `fk_DW_S_idx` (`Source` ASC) VISIBLE,
//INDEX `fk_DW_F_idx` (`F_ID` ASC) VISIBLE,
//CONSTRAINT `fk_DW_S`
//FOREIGN KEY (`Source`)
//REFERENCES `Wada Schema`.`DrinkingWater_Source` (`DW_S_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_DW_F`
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
        Schema::dropIfExists('drinking_water');
    }
}
