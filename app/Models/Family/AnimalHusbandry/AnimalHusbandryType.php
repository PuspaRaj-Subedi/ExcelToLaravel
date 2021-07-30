<?php

namespace App\Model\Family\AnimalHusbandry;

use Illuminate\Database\Eloquent\Model;

class AnimalHusbandryType extends Model
{
    protected $primaryKey = 'AH_Ty_ID';

    protected $table = 'animal_husbandry_type';

    protected $fillable = ['name'];
}


//Schema::create('animal_husbandry_type', function (Blueprint $table) {
//    $table->integer('AH_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
