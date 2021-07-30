<?php

namespace App\Model\Family\DrinkingWater;

use Illuminate\Database\Eloquent\Model;

class DrinkingWaterSource extends Model
{
    protected $primaryKey = 'DW_S_ID';

    protected $table = 'drinking_water_source';

    protected $fillable = ['source'];
}

//Schema::create('drinking_water_source', function (Blueprint $table) {
//    $table->integer('DW_S_ID')->nullable(false)->autoIncrement();
//    $table->string('source')->nullable(false);
//    $table->timestamps();
//});
