<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->bigInteger('P_ID')->autoIncrement();
            $table->string('FName');
            $table->string('MName')->nullable();
            $table->string('LName');
            $table->enum('gender',['0','1','2'])->default(0)->comment('0: Male\n1: Female\n2: Others');
            $table->date('DOB');
            $table->integer('Nationality');
            $table->integer('Skill')->nullable();
            $table->boolean('voterID')->default(false);
            $table->boolean('citizenship')->default(false);
            $table->enum('religion',['0','1','2','3','4'])->default(0)->comment('0: Hinduism\n1: Buddhism\n2: Muslim\n3: Islam\n4: Christianity\n');
            $table->string('contact',10)->nullable();
            $table->string('email')->nullable();
            $table->enum('bloodGroup',['0',"A+", "B+", "AB+", "O+", "A-", "B-", "AB-", "O-"]);
            $table->integer('caste');
            $table->integer('relation')->nullable(false)->comment("Relation with Head");
            $table->boolean('is_Dead')->default(false);
            $table->bigInteger('F_ID');
            $table->timestamps();

            $table->foreign('skill')->references('S_ID')->on('skill');
            $table->foreign('nationality')->references('N_ID')->on('nationality');
            $table->foreign('caste')->references('C_ID')->on('caste');
            $table->foreign('relation')->references('RWH_ID')->on('relation');
            $table->foreign('F_ID')->references('F_ID')->on('family');
        });
    }
//`Caste` INT NOT NULL,
//`Relation` INT NOT NULL COMMENT 'Relation with head',
//`is_dead` TINYINT(1) NOT NULL,
//`Family` BIGINT NOT NULL,
//`Skill` INT NULL,
//PRIMARY KEY (`P_ID`),
//INDEX `fk_P_S_ID_idx` (`Skill` ASC) VISIBLE,
//INDEX `fk_P_N_ID_idx` (`Nationality` ASC) VISIBLE,
//INDEX `fk_P_C_ID_idx` (`Caste` ASC) VISIBLE,
//INDEX `fk_P_RWH_idx` (`Relation` ASC) VISIBLE,
//CONSTRAINT `fk_P_S_ID`
//FOREIGN KEY (`Skill`)
//REFERENCES `Wada Schema`.`Skill` (`S_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_P_N_ID`
//FOREIGN KEY (`Nationality`)
//REFERENCES `Wada Schema`.`Nationality` (`N_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_P_C_ID`
//FOREIGN KEY (`Caste`)
//REFERENCES `Wada Schema`.`Caste` (`C_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION,
//CONSTRAINT `fk_P_RWH`
//FOREIGN KEY (`Relation`)
//REFERENCES `Wada Schema`.`Relation` (`RWH_ID`)
//ON DELETE NO ACTION
//ON UPDATE NO ACTION)
//ENGINE = InnoDB
//COMMENT = 'Person\'s Personal Information'
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
