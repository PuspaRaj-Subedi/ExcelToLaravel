<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBridgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridge', function (Blueprint $table) {
            $table->bigInteger('BR_ID')->autoIncrement();
            $table->string('name');
            $table->enum('type',["0", "1", "2", '3', "4", "5", "6", "7"])->default(0)->comment('0:Pakki \n1: jhulunge\n2: Venten\n3: Calvat\n 4: Tuwin\n 5: Tuwin\n 6: Kacchi\n 7: Kaath \n8: Others');
            $table->integer('length');
            $table->boolean('breadth');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`NaturalResources` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`NR_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`CoveredArea` INT NOT NULL,
//`TimeToReach` INT NOT NULL COMMENT '0 : Kacchi\n1:  Pakki / Pitched\n2: Gravelled\n',
//`Wa_ID` INT NOT NULL,
//`Type` INT NOT NULL,
//PRIMARY KEY (`NR_ID`),
//INDEX `fk_FP_WF_idx` (`Type` ASC) VISIBLE,
//INDEX `fk_NR_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_NR_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_NR_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`NaturalResources_Type` (`Ty_ID`)
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
        Schema::dropIfExists('natural_resources');
    }
}
