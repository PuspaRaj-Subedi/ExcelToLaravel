<?php

namespace App\Model\Person;

use Illuminate\Database\Eloquent\Model;

class Caste extends Model
{
    protected $primaryKey = 'C_ID';

   protected $table = 'caste';

   protected $fillable = ['name'];
}

// Schema::create('caste', function (Blueprint $table) {
//             $table->integer('C_ID')->nullable(false)->autoIncrement();
//             $table->string('name')->nullable(false);
//             $table->timestamps();
//         });
   