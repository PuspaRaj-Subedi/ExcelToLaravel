<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_type', function (Blueprint $table) {
            $table->integer('I_Ty_ID')->nullable(false)->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
    }
//      CREATE TABLE IF NOT EXISTS `Wada Schema`.`Insurance_Type` (
//   `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//   `update_time` TIMESTAMP NULL,
//   `I_Ty_ID` INT NOT NULL,
//   `Name` VARCHAR(45) NOT NULL,
//   PRIMARY KEY (`I_Ty_ID`))
// ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_type');
    }
}
