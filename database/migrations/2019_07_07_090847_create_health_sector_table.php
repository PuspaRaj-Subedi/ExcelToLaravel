<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_sector', function (Blueprint $table) {
            $table->bigInteger('HeS')->autoIncrement();
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->boolean('registered');
            $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Public\n1:  Private\n2: Government\n');
            $table->integer('doctorNo');
            $table->integer('nurseNo');
            $table->integer('staffM');
            $table->integer('staffF');
            $table->integer('Wa_ID');
            $table->timestamps();

            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`HealthSector` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`HeS_ID` BIGINT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//`Address` VARCHAR(45) NOT NULL,
//`Contact` VARCHAR(10) NOT NULL,
//`Registered` TINYINT(2) NOT NULL,
//`Type` ENUM("0", "1", "2") NOT NULL COMMENT '0 : Public\n1:  Private\n2: Government\n',
//`DoctorNo` SMALLINT NOT NULL,
//`NurseNo` SMALLINT NOT NULL,
//`StaffM` SMALLINT NOT NULL,
//`StaffF` SMALLINT NOT NULL,
//`Wa_ID` INT NOT NULL,
//PRIMARY KEY (`HeS_ID`),
//INDEX `fk_HeS_Wa_idx` (`Wa_ID` ASC) VISIBLE,
//CONSTRAINT `fk_HeS_Wa`
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
        Schema::dropIfExists('_health_sector');
    }
}
