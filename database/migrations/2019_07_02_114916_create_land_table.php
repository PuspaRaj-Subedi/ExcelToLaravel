<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land', function (Blueprint $table) {
            $table->bigInteger('La_ID')->nullable(false)->autoIncrement();
            $table->integer('living')->default(0);
            $table->integer('fertile')->default(0);
            $table->integer('barren')->default(0);
            $table->enum('irrigationType',["0", "1", "2", '3', "4"])->default(1)->comment('0:Khola\n1: Boring\n2: Dhara\n3: Barsa\n 4: Kulogit');
            $table->integer('irrigation')->default(0);
            $table->integer('total')->default(0);
            $table->bigInteger('F_ID')->nullable();
            $table->integer('TBS_ID')->nullable();
            $table->integer('Gaun_ID')->nullable();
            $table->integer('WA_ID')->nullable();

            $table->timestamps();

            $table->foreign('F_ID')->references('F_ID')->on('family');
            $table->foreign('TBS_ID')->references('TBS_ID')->on('tbs');
            $table->foreign('Gaun_ID')->references('Ga_ID')->on('gaun');
            $table->foreign('WA_ID')->references('WA_ID')->on('ward_address');
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Land` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`La_ID` BIGINT NOT NULL,
//`Living` INT NOT NULL,
//`Fertility` INT NOT NULL,
//`Irrigation` INT NOT NULL,
//`total` INT NOT NULL,
//`FA_ID` BIGINT NOT NULL,
//PRIMARY KEY (`La_ID`),
//INDEX `fk_La_Fa_idx` (`FA_ID` ASC) VISIBLE,
//CONSTRAINT `fk_La_Fa`
//FOREIGN KEY (`FA_ID`)
//REFERENCES `Wada Schema`.`Family` (`F_ID`)
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
        Schema::dropIfExists('land');
    }
}
