<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_type', function (Blueprint $table) {
            $table->integer('Bs_Ty_ID')->nullable(false)->autoIncrement();
            $table->string('name')->nullable(false);
            $table->timestamps();
        });
    }
//CREATE TABLE IF NOT EXISTS `Wada Schema`.`Business_Type` (
//`create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
//`update_time` TIMESTAMP NULL,
//`BS_T_ID` INT NOT NULL,
//`Name` VARCHAR(45) NOT NULL,
//PRIMARY KEY (`BS_T_ID`))
//ENGINE = InnoDB
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_type');
    }
}
