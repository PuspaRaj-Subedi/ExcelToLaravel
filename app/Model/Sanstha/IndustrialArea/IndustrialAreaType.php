<?php

namespace App\Model\Sanstha\IndustrialArea;

use Illuminate\Database\Eloquent\Model;

class IndustrialAreaType extends Model
{
    protected $primaryKey = 'IA_Ty_ID';

   protected $table = 'industrial_area_type';

   protected $fillable = ['name'];
}

// Schema::create('industrial_area_type', function (Blueprint $table) {
//             $table->integer('IA_Ty_ID')->autoIncrement();
//             $table->string('name');
//             $table->timestamps();
//         });