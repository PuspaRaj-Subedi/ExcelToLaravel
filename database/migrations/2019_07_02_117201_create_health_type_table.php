<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_type', function (Blueprint $table) {
            $table->integer('H_Ty_ID')->nullable(false)->autoIncrement();
            $table->string('type');
            $table->timestamps();
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Health_Type` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `H_Ty_ID` INT NOT NULL,
//   `Type` VARCHAR(45) NOT NULL,
//   PRIMARY KEY (`H_Ty_ID`))
// ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_type');
    }
}
