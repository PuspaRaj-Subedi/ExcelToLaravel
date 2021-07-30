<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportation', function (Blueprint $table) {
            $table->bigInteger('Tr_ID')->nullable(false)->autoIncrement();
            $table->enum('type',["0", "1", "2"])->default(1)->comment('0:Public\n1: Private\n2: Government\n');
            $table->integer('number')->nullable(false)->default(1);
            $table->integer('investment')->nullable(false)->default(0);
            $table->integer('loan')->nullable(false)->default(0);
            $table->integer('profit')->nullable(false)->default(0);
            $table->integer('income')->nullable(false)->default(0);
            $table->integer('Tr_Type')->nullable(false);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('Tr_Type')->references('Tr_Ty_ID')->on('transportation_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Transportation` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Tr_ID` BIGINT NOT NULL,
//`Type` ENUM("0", "1", "2") NOT NULL DEFAULT '2' COMMENT '0:Public\n1: Private\n2: Government\n',
//`Number` INT NOT NULL,
//`Profit` INT NOT NULL,
//`Income` INT NOT NULL,
//`Tr_Type` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`Tr_ID`),
//INDEX `fk_Tr_Ty_idx` (`Tr_Type` ASC) VISIBLE,
//INDEX `fk_Tr_F_idx` (`F_ID` ASC) VISIBLE,
//CONSTRAINT `fk_Tr_Ty`
//FOREIGN KEY (`Tr_Type`)
//REFERENCES `Wada Schema`.`Transportation_Type` (`Tr_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_Tr_F`
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
        Schema::dropIfExists('transportation');
    }
}
