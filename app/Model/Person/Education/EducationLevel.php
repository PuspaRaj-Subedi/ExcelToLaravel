<?php

namespace App\Model\Person\Education;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
   protected $primaryKey = 'E_L_ID';

   protected $table = 'education_level';

   protected $fillable = ['name'];
}


 // Schema::create('education_level', function (Blueprint $table) {
 //            $table->integer('E_L_ID')->autoIncrement();
 //            $table->string('name');
 //            $table->timestamps();
 //        });