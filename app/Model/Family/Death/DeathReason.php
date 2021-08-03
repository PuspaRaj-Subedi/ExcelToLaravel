<?php

namespace App\Model\Family\Death;

use Illuminate\Database\Eloquent\Model;

class DeathReason extends Model
{
    protected $primaryKey = 'De_R_ID';

    protected $table = 'death_reason';

    protected $fillable = ['name'];
}


//Schema::create('death_reason', function (Blueprint $table) {
//    $table->integer('De_R_ID')->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
