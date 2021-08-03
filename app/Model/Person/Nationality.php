<?php

namespace App\Model\Person;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
   protected $primaryKey = 'N_ID';

   protected $table = 'nationality';

   protected $fillable = ['name'];
}

 // Schema::create('nationality', function (Blueprint $table) {
 //            $table->integer('N_ID')->nullable(false)->autoIncrement();
 //            $table->string('name')->nullable(false);
 //            $table->timestamps();
 //        });
