<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddictionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addiction', function (Blueprint $table) {
            $table->bigInteger('A_ID')->autoIncrement();
            $table->bigInteger('P_ID');
            $table->integer('type');
            $table->integer('expenditure');
            $table->text('reason')->nullable();
            $table->date('sd')->nullable();
            $table->date('ed')->nullable();
            $table->timestamps();

            $table->foreign('type')->references('A_Ty_ID')->on('addiction_type');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Addiction` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `A_ID` BIGINT NOT NULL,
//   `P_ID` BIGINT NOT NULL,
//   `Type` INT NOT NULL,
//   `Reason` TEXT NULL,
//   `sd` DATE NOT NULL,
//   `ed` DATE NULL,
//   PRIMARY KEY (`A_ID`),
//   INDEX `fk_A_Ty_ID_idx` (`Type` ASC) VISIBLE,
//   INDEX `fk_A_P_ID_idx` (`P_ID` ASC) VISIBLE,
//   CONSTRAINT `fk_A_Ty_ID`
//     FOREIGN KEY (`Type`)
//     REFERENCES `Wada Schema`.`Addiction_Type` (`A_Ty_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_A_P_ID`
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
        Schema::dropIfExists('addiction');
    }
}
