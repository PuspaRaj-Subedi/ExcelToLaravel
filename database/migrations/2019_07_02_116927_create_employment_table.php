<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment', function (Blueprint $table) {
            $table->bigInteger('Emp_ID')->nullable(false)->autoIncrement();
            $table->bigInteger('P_ID')->nullable(false);
            $table->enum('type',["0", "1", "2", "3", "4"])->default(1)->comment('0:Public\n1: Private\n2: Government\n 3: Bidesh\n 4\n Others');
            $table->integer('name');
            $table->integer('income');
            $table->date('sd');
            $table->date('ed');
            $table->timestamps();

            $table->foreign('name')->references('Emp_Nm_ID')->on('employment_name');
            $table->foreign('P_ID')->references('P_ID')->on('person');
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Employment` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `Emp_ID` BIGINT NOT NULL,
//   `P_ID` BIGINT NULL,
//   `sd` DATE NOT NULL,
//   `ed` DATE NULL,
//   `Name` INT NOT NULL,
//   `Type` TINYINT NOT NULL,
//   `Income` BIGINT NULL,
//   PRIMARY KEY (`Emp_ID`),
//   INDEX `fk_Emp_Nm_idx` (`Name` ASC) VISIBLE,
//   INDEX `fk_Emp_PID_idx` (`P_ID` ASC) VISIBLE,
//   CONSTRAINT `fk_Emp_Nm`
//     FOREIGN KEY (`Name`)
//     REFERENCES `Wada Schema`.`Employment_Name` (`Emp_Nm_ID`)
//     ON DELETE NO ACTION
//     ON UPDATE NO ACTION,
//   CONSTRAINT `fk_Emp_PID`
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
        Schema::dropIfExists('employment');
    }
}
