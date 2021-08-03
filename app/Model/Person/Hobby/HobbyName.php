<?php

namespace App\Model\Person\Hobby;

use Illuminate\Database\Eloquent\Model;

class HobbyName extends Model
{
    protected $primaryKey = 'Ty_ID';

   protected $table = 'hobby_type';

   protected $fillable = ['name'];
}

 // Schema::create('hobby_type', function (Blueprint $table) {
 //            $table->integer('Ty_ID')->nullable(false)->autoIncrement();
 //            $table->string('name');
 //            $table->timestamps();
 //        });