<?php

namespace App\Model\Family\Energy;

use Illuminate\Database\Eloquent\Model;

class EneryType extends Model
{
    protected $primaryKey = 'En_Ty_ID';

    protected $table = 'energy_type';

    protected $fillable = ['name'];
}

//Schema::create('energy_type', function (Blueprint $table) {
//    $table->integer('En_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
