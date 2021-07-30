<?php

namespace App\Model\Family\HomeStructure;

use Illuminate\Database\Eloquent\Model;

class HomeStructureWall extends Model
{
    protected $primaryKey = 'HS_W_ID';

    protected $table = 'home_structure_wall';

    protected $fillable = ['name'];
}


//Schema::create('home_structure_wall', function (Blueprint $table) {
//    $table->integer('HS_W_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});

