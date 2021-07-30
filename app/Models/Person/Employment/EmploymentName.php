<?php

namespace App\Model\Person\Employment;

use Illuminate\Database\Eloquent\Model;

class EmploymentName extends Model
{
   protected $primaryKey = 'Emp_Nm_ID';

   protected $table = 'employment_name';

   protected $fillable = ['name'];
}


 // Schema::create('employment_name', function (Blueprint $table) {
 //            $table->integer('Emp_Nm_ID')->nullable(false)->autoIncrement();
 //            $table->string('name');
 //            $table->timestamps();
 //        });