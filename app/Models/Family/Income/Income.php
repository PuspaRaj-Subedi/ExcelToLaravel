<?php

namespace App\Model\Family\Income;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $primaryKey = 'In_ID';

    protected $table = 'income';

    protected $fillable = ['income', 'saving', 'source', 'F_ID', 'is_enough'];
}


//Schema::create('income', function (Blueprint $table) {
//    $table->bigInteger('In_ID')->nullable(false)->autoIncrement();
//    $table->integer('monthly')->nullable(false)->default(0);
//    $table->integer('yearly')->nullable(false)->default(0);
//    $table->integer('source')->nullable(false);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('source')->references('In_S_ID')->on('income_source');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
