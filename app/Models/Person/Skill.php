<?php

namespace App\Model\Person;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $primaryKey = 'S_ID';

   protected $table = 'skill';

   protected $fillable = ['name'];
}


// Schema::create('skill', function (Blueprint $table) {
//             $table->integer('S_ID')->nullable(false)->autoIncrement();
//             $table->string('name')->nullable(false);
//             $table->timestamps();
//         });