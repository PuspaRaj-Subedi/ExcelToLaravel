<?php

namespace App\Model\Family\AnimalHusbandry;

use Illuminate\Database\Eloquent\Model;

class AnimalHusbandry extends Model
{
    protected $primaryKey = 'AH_ID';

    protected $table = 'animal_husbandry';

    protected $fillable = ['income', 'invest', 'profit', 'number', 'type', 'F_ID'];
}

//Schema::create('animal_husbandry', function (Blueprint $table) {
//    $table->bigInteger('AH_ID')->nullable(false)->autoIncrement();
//    $table->integer('income')->nullable(false)->default(0);
//    $table->integer('invest')->nullable(false)->default(0);
//    $table->integer('profit')->nullable(false)->default(0);
//    $table->integer('number')->nullable(false)->default(1);
//    $table->integer('type')->nullable(false);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('AH_Ty_ID')->on('animal_husbandry_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
