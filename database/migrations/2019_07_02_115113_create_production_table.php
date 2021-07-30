<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production', function (Blueprint $table) {
            $table->bigInteger('Pr_ID')->nullable(false)->autoIncrement();
            $table->integer('productionArea')->nullable()->default(null);
            $table->integer('quantity')->nullable(false)->default(0);
            $table->integer('use')->nullable(false)->default(0);
            $table->integer('sell')->nullable(false)->default(0);
            $table->integer('type')->nullable(false);
            $table->bigInteger('F_ID')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('Pr_Ty_ID')->on('production_type');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Production` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Pr_ID` BIGINT NOT NULL,
//`Quantity` INT NOT NULL,
//`Use` INT NOT NULL,
//`Sell` INT NOT NULL,
//`Type` INT NULL,
//`F_ID` BIGINT NULL,
//PRIMARY KEY (`Pr_ID`),
//INDEX `fk_HS_F_idx` (`F_ID` ASC) VISIBLE,
//INDEX `fk_AH_Ty_idx` (`Type` ASC) VISIBLE,
//CONSTRAINT `fk_Pr_Ty`
//FOREIGN KEY (`Type`)
//REFERENCES `Wada Schema`.`Production_Type` (`Pr_Ty_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_Pr_F`
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
        Schema::dropIfExists('production');
    }
}
