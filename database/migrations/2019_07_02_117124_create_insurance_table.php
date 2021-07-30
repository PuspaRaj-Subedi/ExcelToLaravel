<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance', function (Blueprint $table) {
            $table->bigInteger('I_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('P_ID')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('I_Ty_ID')->on('insurance_type');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Insurance` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `I_ID` BIGINT NOT NULL,
//   `Type` INT NOT NULL,
//   `P_ID` BIGINT NULL,
//   PRIMARY KEY (`I_ID`),
//   INDEX `fk_I_Ty_idx` (`Type` ASC) VISIBLE,
//   INDEX `fk_I_P_idx` (`P_ID` ASC) VISIBLE,
//   CONSTRAINT `fk_I_Ty`
//     FOREIGN KEY (`Type`)
//     REFERENCES `Wada Schema`.`Insurance_Type` (`I_Ty_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_I_P`
//     FOREIGN KEY (`P_ID`)
//     REFERENCES `Wada Schema`.`Person` (`P_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION)
// ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance');
    }
}
