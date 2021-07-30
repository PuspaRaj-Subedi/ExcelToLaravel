<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddictionTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addiction_type', function (Blueprint $table) {
            $table->integer('A_Ty_ID')->autoIncrement();
            $table->string('name')->nullable(false);
            $table->timestamps();
        });
    }
// CREATE TABLE IF NOT EXISTS `Wada Schema`.`Addiction_Type` (
//   `A_Ty_ID` INT NOT NULL,
//   `Name` VARCHAR(45) NULL, 
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NOT NULL,
//   PRIMARY KEY (`A_Ty_ID`))
// ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addiction_type');
    }
}
