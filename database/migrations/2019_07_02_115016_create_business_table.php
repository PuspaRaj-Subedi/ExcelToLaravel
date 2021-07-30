<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->bigInteger('Bs_ID')->nullable(false)->autoIncrement();
            $table->integer('income')->nullable(false)->default(0);
            $table->integer('invest')->nullable(false)->default(0);
            $table->string('address')->nullable(false)->comment('This is to be replaced by addess table and its entities\n');
            $table->integer('type')->nullable(false);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('Bs_Ty_ID')->on('business_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Business` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`BS_ID` BIGINT NOT NULL,
//`Income` INT NOT NULL DEFAULT '2' COMMENT '0: Governmental\n1: Public\n2: Private\n',
//`Invest` INT NOT NULL,
//`Address` VARCHAR(45) NOT NULL COMMENT 'This is to be replaced by addess table and its entities\n',
//`Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`BS_ID`),
//INDEX `fk_Tr_Ty_idx` (`Type` ASC) VISIBLE,
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//CONSTRAINT `fk_BS_T`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`Business_Type` (`BS_T_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_BS_F`
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
        Schema::dropIfExists('business');
    }
}
