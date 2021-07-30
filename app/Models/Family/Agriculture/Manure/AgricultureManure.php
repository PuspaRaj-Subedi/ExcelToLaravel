<?php

namespace App\Model\Family\Agriculture\Manure;

use Illuminate\Database\Eloquent\Model;

class AgricultureManure extends Model
{
    protected $primaryKey = 'AgM_ID';

    protected $table = 'agriculture_manure';

    protected $fillable = ['quantity', 'effects', 'type', 'typeA', 'F_ID'];

//Schema::create('agriculture_manure', function (Blueprint $table) {
//    $table->bigInteger('AgM_ID')->nullable(false)->autoIncrement();
//    $table->integer('quantity')->nullable(false)->default(0);
//    $table->text('effects')->nullable(false);
//    $table->integer('type')->nullable(false);
//    $table->boolean('typeA')->nullable(false)->default(false)->comment('0: Home made\n1: Bought\n');
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('AgM_Ty_ID')->on('agriculture_manure_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});


}
