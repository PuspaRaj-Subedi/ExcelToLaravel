<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisabledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disabled', function (Blueprint $table) {
            $table->bigInteger('D_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('P_ID')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->string('reason')->nullable();
            $table->timestamps();

            $table->foreign('type')->references('D_Ty_ID')->on('disabled_type');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
//     CREATE TABLE IF NOT EXISTS `Wada Schema`.`Disabled` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `D_ID` BIGINT NOT NULL,
//   `P_ID` BIGINT NOT NULL,
//   `Type` INT NOT NULL,
//   PRIMARY KEY (`D_ID`),
//   INDEX `fk_D_Ty_idx` (`Type` ASC) VISIBLE,
//   INDEX `fk_D_P_ID_idx` (`P_ID` ASC) VISIBLE,
//   CONSTRAINT `fk_D_Ty`
//     FOREIGN KEY (`Type`)
//     REFERENCES `Wada Schema`.`Disabled_Type` (`D_Ty_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_D_P_ID`
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
        Schema::dropIfExists('disabled');
    }
}
