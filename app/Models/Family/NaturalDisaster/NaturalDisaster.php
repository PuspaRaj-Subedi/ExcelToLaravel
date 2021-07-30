<?php

namespace App\Model\Family\NaturalDisaster;

use Illuminate\Database\Eloquent\Model;

class NaturalDisaster extends Model
{
    protected $primaryKey = 'ND_ID';

    protected $table = 'natural_disaster';

    protected $fillable = ['dateFrom', 'dateTo', 'type', 'lossQuantity', 'lossType', 'F_ID'];
}

//
//Schema::create('natural_disaster', function (Blueprint $table) {
//    $table->bigInteger('ND_ID')->nullable(false)->autoIncrement();
//    $table->date('dateFrom')->nullable(false);
//    $table->date('dateTo')->nullable(false);
//    $table->integer('type')->nullable(false);
//    $table->string('lossQuantity')->nullable(false);
//    $table->boolean('lossType')->nullable(false)->comment('0: People\n1: Property\n');
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('ND_Ty_ID')->on('natural_disaster_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
//
