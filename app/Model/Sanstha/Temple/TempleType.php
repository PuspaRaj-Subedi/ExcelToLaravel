<?php

namespace App\Model\Sanstha\Temple;

use Illuminate\Database\Eloquent\Model;

class TempleType extends Model
{
   protected $primaryKey = 'Tp_ty_ID';

   protected $table = 'temple_type';

   protected $fillable = ['name'];
}

// Schema::create('temple_type', function (Blueprint $table) {
//             $table->integer('Tp_ty_ID')->autoIncrement();
//             $table->string('name');
//             $table->timestamps();
//         });