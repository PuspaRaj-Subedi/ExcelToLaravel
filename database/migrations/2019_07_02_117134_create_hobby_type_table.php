<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbyTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobby_type', function (Blueprint $table) {
            $table->integer('Ty_ID')->nullable(false)->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
    }
//     CREATE TABLE IF NOT EXISTS `Wada Schema`.`Hobby_Type` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `Ty_ID` INT NOT NULL,
//   `Name` VARCHAR(45) NOT NULL,
//   PRIMARY KEY (`Ty_ID`))
// ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobby_type');
    }
}
