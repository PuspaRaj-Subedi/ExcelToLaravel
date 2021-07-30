<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_security', function (Blueprint $table) {
            $table->bigInteger('SS_ID')->nullable(false)->autoIncrement();
            $table->date('date')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->string('lossQuantity')->nullable(false);
            $table->boolean('lossType')->nullable(false)->comment('0: People\n1: Property\n');
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('SS_Ty_ID')->on('social_security_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`SocialSecurity` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`SS_ID` BIGINT NOT NULL,
//`Date` DATE NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`LossType` TINYINT(2) NOT NULL COMMENT '0: People / Life\n1: Property\n',
//`Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//`LossQuantity` VARCHAR(45) NOT NULL,
//PRIMARY KEY (`SS_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_SS_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`SocialSecurity_Type` (`SS_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_SS_F`
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
        Schema::dropIfExists('social_security');
    }
}
