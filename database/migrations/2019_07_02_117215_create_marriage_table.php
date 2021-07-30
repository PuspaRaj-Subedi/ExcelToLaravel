<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarriageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage', function (Blueprint $table) {
            $table->bigInteger('Ma_ID')->nullable(false)->autoIncrement();
            $table->date('date')->nullable(false);
            $table->bigInteger('bride')->nullable()->default(null);
            $table->bigInteger('brideGroom')->nullable()->default(null);
            $table->enum('status',['0','1','2','3'])->comment('0: Married\n1: Divorced\n2: Widowed\n3: Separated');
            $table->timestamps();

            $table->foreign('bride')->references('P_ID')->on('person');
            $table->foreign('brideGroom')->references('P_ID')->on('person');
        });
    }
//     CREATE TABLE IF NOT EXISTS `Wada Schema`.`Marriage` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `Ma_ID` BIGINT NOT NULL,
//   `Date` DATE NOT NULL,
//   `Status` ENUM("0", "1", "2", "3") NOT NULL COMMENT '0: Married\n1: Divorced\n2: Widwowed\n3: Separated',
//   `Bride` BIGINT NOT NULL,
//   `BrideGroom` BIGINT NOT NULL,
//   PRIMARY KEY (`Ma_ID`),
//   INDEX `fk_Ma_Bride_idx` (`Bride` ASC) VISIBLE,
//   INDEX `fk_Ma_BrideGroom_idx` (`BrideGroom` ASC) VISIBLE,
//   CONSTRAINT `fk_Ma_Bride`
//     FOREIGN KEY (`Bride`)
//     REFERENCES `Wada Schema`.`Person` (`P_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_Ma_BrideGroom`
//     FOREIGN KEY (`BrideGroom`)
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
        Schema::dropIfExists('marriage');
    }
}
