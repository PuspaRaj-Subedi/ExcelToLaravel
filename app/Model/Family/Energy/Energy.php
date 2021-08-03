<?php

namespace App\Model\Family\Energy;

use Illuminate\Database\Eloquent\Model;

class Energy extends Model
{
    protected $primaryKey = 'En_ID';

    protected $table = 'energy';

    protected $fillable = ['type', 'F_ID'];
}


//Schema::create('energy', function (Blueprint $table) {
//    $table->bigInteger('En_ID')->nullable(false)->autoIncrement();
//    $table->integer('type')->nullable(false);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('En_Ty_ID')->on('energy_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
