<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnergyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy', function (Blueprint $table) {
            $table->bigInteger('En_ID')->nullable(false)->autoIncrement();
            $table->integer('type')->nullable(false);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('En_Ty_ID')->on('energy_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Energy` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`EN_ID` BIGINT NOT NULL,
//`Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`EN_ID`),
//INDEX `fk_Tr_Ty_idx` (`Type` ASC) VISIBLE,
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//CONSTRAINT `fk_En_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`Energy_Type` (`En_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_En_F`
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
        Schema::dropIfExists('energy');
    }
}
