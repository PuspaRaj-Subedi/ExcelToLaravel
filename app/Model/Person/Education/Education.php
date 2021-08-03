<?php

namespace App\Model\Person\Education;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $primaryKey = 'E_ID';

    protected $table = 'education';
   
    protected $fillable = ['subject','schoolCampus','level','continued','P_ID'];
}


//Schema::create('education', function (Blueprint $table) {
            //$table->bigInteger('E_ID')->autoIncrement();
            //$table->integer('subject');
            //$table->integer('schoolCampus');
            //$table->integer('level');
            //$table->boolean('continued');
            //$table->bigInteger('P_ID');
            //$table->timestamps();