<?php

namespace App\Model\Family\HomeStructure;

use Illuminate\Database\Eloquent\Model;

class HomeStructureTerrace extends Model
{
    protected $primaryKey = 'HS_T_ID';

    protected $table = 'home_structure_terrace';

    protected $fillable = ['name'];
}

//Schema::create('home_structure_terrace', function (Blueprint $table) {
//    $table->integer('HS_T_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
