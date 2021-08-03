<?php

namespace App\Model\Family\Expenditure;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    protected $primaryKey = 'Ex_ID';

    protected $table = 'expenditure';

    protected $fillable = ['monthly', 'yearly', 'source', 'F_ID'];
}

//Schema::create('expenditure', function (Blueprint $table) {
//    $table->bigInteger('Ex_ID')->nullable(false)->autoIncrement();
//    $table->integer('monthly')->nullable(false)->default(0);
//    $table->integer('yearly')->nullable(false)->default(0);
//    $table->integer('source')->nullable(false);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('source')->references('Ex_S_ID')->on('expenditure_source');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});

