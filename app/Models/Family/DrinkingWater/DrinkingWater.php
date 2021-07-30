<?php

namespace App\Model\Family\DrinkingWater;

use Illuminate\Database\Eloquent\Model;

class DrinkingWater extends Model
{
    protected $primaryKey = 'DW_ID';

    protected $table = 'drinking_water';

    protected $fillable = ['source', 'distance', 'time', 'is_Available', 'F_ID'];
}



//Schema::create('drinking_water', function (Blueprint $table) {
//    $table->bigInteger('DW_ID')->nullable(false)->autoIncrement();
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->integer('source')->nullable(false);
//    $table->integer('distance')->nullable(false);
//    $table->integer('time')->nullable(false)->comment('in minutes');
//    $table->boolean('is_Available')->nullable(false)->default(true)->comment('At your home');
//    $table->timestamps();
//
//    $table->foreign('source')->references('DW_S_ID')->on('drinking_water_source');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
