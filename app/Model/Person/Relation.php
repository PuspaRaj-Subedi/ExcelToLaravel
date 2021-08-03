<?php

namespace App\Model\Person;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $primaryKey = 'RWH_ID';

   protected $table = 'relation';

   protected $fillable = ['name'];
}


// Schema::create('relation', function (Blueprint $table) {
//             $table->integer('RWH_ID')->nullable(false)->autoIncrement();
//             $table->string('name')->nullable(false);
//             $table->timestamps();
//         });