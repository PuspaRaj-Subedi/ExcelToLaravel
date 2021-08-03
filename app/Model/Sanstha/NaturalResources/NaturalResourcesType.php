<?php

namespace App\Model\Sanstha\NaturalResources;

use Illuminate\Database\Eloquent\Model;

class NaturalResourcesType extends Model
{
   protected $primaryKey = 'NR_Ty_ID';

   protected $table = 'natural_resources_type';

   protected $fillable = ['name'];
}


// Schema::create('natural_resources_type', function (Blueprint $table) {
//             $table->integer('NR_Ty_ID')->autoIncrement();
//             $table->string('name');
//             $table->timestamps();
//         });
