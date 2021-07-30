<?php

namespace App\Model\Family\HomeStructure;

use Illuminate\Database\Eloquent\Model;

class HomeStructure extends Model
{
    protected $primaryKey = 'HS_ID';

    protected $table = 'home_structure';

    protected $fillable = ['floor', 'houseNo', 'totalHouse', 'roadAccess', 'buildDate', 'wall', 'terrace', 'F_ID'];
}



//Schema::create('home_structure', function (Blueprint $table) {
//    $table->bigInteger('HS_ID')->nullable(false)->autoIncrement();
//    $table->tinyInteger('floor')->nullable(false)->default(1);
//    $table->string('houseNo');
//    $table->date('buildDate');
//    $table->integer('wall')->nullable(false)->default(0);
//    $table->integer('terrace')->nullable(false)->default(0);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('terrace')->references('HS_T_ID')->on('home_structure_terrace');
//    $table->foreign('wall')->references('HS_W_ID')->on('home_structure_wall');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
