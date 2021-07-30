<?php

namespace App\Model\Sanstha\Others;

use Illuminate\Database\Eloquent\Model;

class OthersType extends Model
{
    protected $primaryKey = 'O_ty_ID';

   protected $table = 'others_type';

   protected $fillable = ['name'];
}

// Schema::create('others_type', function (Blueprint $table) {
//             $table->integer('O_ty_ID')->autoIncrement();
//             $table->string('name');
//             $table->timestamps();
//         });