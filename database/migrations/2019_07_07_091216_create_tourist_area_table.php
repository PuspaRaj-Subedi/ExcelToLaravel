<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouristAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_area', function (Blueprint $table) {
            $table->bigInteger('TA_ID')->autoIncrement();
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Public\n1:  Private\n2: Government\n');
            $table->text('desc');
            $table->text('famousFor');
            $table->integer('timeToReach');
            $table->boolean('roadAccess');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`TouristArea` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`TA_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`Contact` VARCHAR(10) NOT NULL,
//`Type` ENUM("0", "1", "2") NOT NULL COMMENT '0 : Public\n1:  Private\n2: Government\n',
//`Desc` TEXT NOT NULL,
//`FamousFor` TEXT NOT NULL,
//`Wa_ID` INT NOT NULL,
//PRIMARY KEY (`TA_ID`),
//INDEX `fk_TA_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_TA_Wa`
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
        Schema::dropIfExists('tourist_area');
    }
}
