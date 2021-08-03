<?php

namespace App\Model\Family\EnvironmentalStatus;

use Illuminate\Database\Eloquent\Model;

class EnvironmentalStatusType extends Model
{
    protected $primaryKey = 'ES_Ty_ID';

    protected $table = 'environmental_status_type';

    protected $fillable = ['name'];
}

//Schema::create('environmental_status_type', function (Blueprint $table) {
//    $table->integer('ES_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
