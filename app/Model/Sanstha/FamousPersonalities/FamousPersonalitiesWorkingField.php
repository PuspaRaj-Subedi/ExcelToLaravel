<?php

namespace App\Model\Sanstha\FamousPersonalities;

use Illuminate\Database\Eloquent\Model;

class FamousPersonalitiesWorkingField extends Model
{
    protected $primaryKey = 'FP_WF_ID';

   protected $table = 'famous_personalities_working_field';

   protected $fillable = ['name'];
}


// Schema::create('famous_personalities_working_field', function (Blueprint $table) {
//             $table->integer('FP_WF_ID')->autoIncrement();
//             $table->string('name');
//             $table->timestamps();
//         });
//    