<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobby', function (Blueprint $table) {
            $table->bigInteger('Hb_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('P_ID')->nullable(false);
            $table->integer('type')->nullable(false);
            $table->timestamps();

            $table->foreign('type')->references('Ty_ID')->on('hobby_type');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Hobby` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `Hb_ID` BIGINT NOT NULL,
//   `Type` INT NOT NULL,
//   `P_ID` BIGINT NOT NULL,
//   PRIMARY KEY (`Hb_ID`),
//   INDEX `fk_Hb_Ty_idx` (`Type` ASC) VISIBLE,
//   INDEX `fk_Hb_P_ID_idx` (`P_ID` ASC) VISIBLE,
//   CONSTRAINT `fk_Hb_Ty`
//     FOREIGN KEY (`Type`)
//     REFERENCES `Wada Schema`.`Hobby_Type` (`Ty_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_Hb_P_ID`
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
        Schema::dropIfExists('hobby');
    }
}
