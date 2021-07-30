<?php

namespace App\Model\Person\Education;

use Illuminate\Database\Eloquent\Model;

class EducationSchoolCampus extends Model
{
    protected $primaryKey = 'E_SC_ID';

   protected $table = 'education_school_campus';

   protected $fillable = ['name'];
}

// Schema::create('education_school_campus', function (Blueprint $table) {
//             $table->integer('E_SC_ID')->autoIncrement();
//             $table->string('name');
//             $table->timestamps();
//         });