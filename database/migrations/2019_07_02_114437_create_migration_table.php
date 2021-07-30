<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migration', function (Blueprint $table) {
            $table->bigInteger('Mg_ID')->nullable(false)->autoIncrement();
            $table->string("where");
            $table->integer('reason');
            $table->date('date');
            $table->timestamps();

            $table->foreign('reason')->references('M_R_ID')->on('migration_reason');
        });

    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Migration` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Mg_ID` BIGINT NOT NULL,
//`Where` VARCHAR(45) NOT NULL COMMENT '0: Not Bought\n1: Bought\n',
//`Reason` INT NOT NULL,
//`F_ID` BIGINT NOT NULL,
//PRIMARY KEY (`Mg_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Reason` ASC) VISIBLE,
//CONSTRAINT `fk_Mg_R`
//FOREIGN KEY (`Reason`)
//REFERENCES `Wada Schema`.`Migration_Reason` (`M_R_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_Mg_F`
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
        Schema::dropIfExists('migration');
    }
}
