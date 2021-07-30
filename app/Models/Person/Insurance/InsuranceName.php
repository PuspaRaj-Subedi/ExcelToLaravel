<?php

namespace App\Model\Person\Insurance;

use Illuminate\Database\Eloquent\Model;

class InsuranceName extends Model
{
    protected $primaryKey = 'I_Ty_ID';

   protected $table = 'insurance_type';

   protected $fillable = ['name'];
}

 // Schema::create('insurance_type', function (Blueprint $table) {
 //            $table->integer('I_Ty_ID')->nullable(false)->autoIncrement();
 //            $table->string('name');
 //            $table->timestamps();
 //        });