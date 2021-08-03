<?php

namespace App\Model\Family\NaturalDisaster;

use Illuminate\Database\Eloquent\Model;

class NaturalDisasterType extends Model
{
    protected $primaryKey = 'ND_Ty_ID';

    protected $table = 'natural_disaster_type';

    protected $fillable = ['name'];
}

//Schema::create('natural_disaster_type', function (Blueprint $table) {
//    $table->integer('ND_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
