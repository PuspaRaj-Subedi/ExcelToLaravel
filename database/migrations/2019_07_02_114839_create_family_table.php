<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family', function (Blueprint $table) {
            $table->bigInteger('F_ID')->autoIncrement();
            $table->integer('TBS');
            $table->integer('Gaun');
            $table->integer('WA');
            $table->boolean('urban')->comment('0: Urban\n1: Rural');
            $table->boolean('is_joint')->default(true)->comment('0: Nucler Family\n1: Joint Family\n');
            $table->bigInteger('migration')->nullable();
            $table->bigInteger('parent_ID')->nullable();

            $table->timestamps();


            $table->foreign('WA')->references('WA_ID')->on('ward_address');
            $table->foreign('Gaun')->references('Ga_ID')->on('gaun');
            $table->foreign('TBS')->references('TBS_ID')->on('tbs');
            $table->foreign('migration')->references('Mg_ID')->on('migration');
            $table->foreign('parent_ID')->references('F_ID')->on('family');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Family` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`F_ID` BIGINT NOT NULL,
//`TBS` INT NOT NULL,
//`Gaun` INT NOT NULL,
//`Wa` INT NOT NULL,
//`Urban` TINYINT NOT NULL COMMENT '0: Urban\n1: Rural',
//`is_Joint` TINYINT NOT NULL DEFAULT 1 COMMENT '0: Nucler Family\n1: Joint Family\n',
//`Migration` BIGINT NOT NULL,
//`parent_ID` BIGINT NOT NULL,
//PRIMARY KEY (`F_ID`),
//INDEX `fk_F_Wa_idx` (`Wa` ASC) VISIBLE,
//INDEX `fk_F_Gaun_idx` (`Gaun` ASC) VISIBLE,
//INDEX `fk_F_TBS_idx` (`TBS` ASC) VISIBLE,
//INDEX `fk_F_Parent_idx` (`parent_ID` ASC) VISIBLE,
//CONSTRAINT `fk_F_Parent`
//FOREIGN KEY (`parent_ID`)
//REFERENCES `Wada Schema`.`Family` (`F_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_F_Wa`
//FOREIGN KEY (`Wa`)
//REFERENCES `Wada Schema`.`Ward` (`Wd_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_F_Gaun`
//FOREIGN KEY (`Gaun`)
//REFERENCES `Wada Schema`.`Gaun` (`Gaun_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_F_TBS`
//FOREIGN KEY (`TBS`)
//REFERENCES `Wada Schema`.`TBS` (`TBS_ID`)
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
        Schema::dropIfExists('family');
    }
}
