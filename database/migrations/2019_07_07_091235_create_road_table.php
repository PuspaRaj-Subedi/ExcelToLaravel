<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road', function (Blueprint $table) {
            $table->bigInteger('Ro_ID')->autoIncrement();
            $table->string('name');
            $table->integer('length');
            $table->integer('breadth');
            $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Kacchi\n1:  Pakki / Pitched\n2: Gravelled\n');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Road` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Ro_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Length` INT NOT NULL,
//`Breadth` INT NOT NULL,
//`Type` ENUM("0", "1", "2") NOT NULL COMMENT '0 : Kacchi\n1:  Pakki / Pitched\n2: Gravelled\n',
//`Wa_ID` INT NOT NULL,
//PRIMARY KEY (`Ro_ID`),
//INDEX `fk_Ro_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_Ro_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
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
        Schema::dropIfExists('road');
    }
}
