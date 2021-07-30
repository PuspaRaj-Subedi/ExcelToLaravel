<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempleTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temple_type', function (Blueprint $table) {
            $table->integer('Tp_ty_ID')->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
    }


//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Temple_Type` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`Ty_ID` INT NOT NULL,
//`Name` VARCHAR(45) NULL,
//PRIMARY KEY (`Ty_ID`))
//ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temple_type');
    }
}
