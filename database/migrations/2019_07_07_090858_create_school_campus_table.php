<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolCampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_campus', function (Blueprint $table) {
            $table->bigInteger('SeCa_ID')->autoIncrement();
            $table->string('name');
            $table->string('cname');
            $table->string('address');
            $table->string('contact');
            $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Public\n1:  Private\n2: Government\n');
            $table->integer('studentM');
            $table->integer('studentF');
            $table->integer('staffM');
            $table->integer('staffF');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');

        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`SchoolCampus` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`SeCa_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`Contact` VARCHAR(10) NOT NULL,
//`Type` ENUM("0", "1", "2") NOT NULL COMMENT '0 : Public\n1:  Private\n2: Government\n',
//`StudentsM` SMALLINT NOT NULL,
//`StudentsF` SMALLINT NOT NULL,
//`Wa_ID` INT NOT NULL,
//`StaffM` SMALLINT NOT NULL,
//`StaffF` SMALLINT NOT NULL,
//PRIMARY KEY (`SeCa_ID`),
//INDEX `fk_SeCa_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_SeCa_Wa`
//FOREIGN KEY (`Wa_ID`)
//REFERENCES `Wada Schema`.`Ward_Address` (`Wa_ID`)
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
        Schema::dropIfExists('_school_campus');
    }
}
