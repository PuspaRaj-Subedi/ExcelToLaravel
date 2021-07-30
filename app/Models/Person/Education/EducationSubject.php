<?php

namespace App\Model\Person\Education;

use Illuminate\Database\Eloquent\Model;

class EducationSubject extends Model
{
    protected $primaryKey = 'E_Su_ID';

    protected $table = 'education_subject';

    protected $fillable = ['name'];
}

     // Schema::create('education_subject', function (Blueprint $table) {
     //        $table->integer('E_Su_ID')->autoIncrement();
     //        $table->string('name');
     //        $table->timestamps();
     //    });