<?php

namespace App\Model\Person\Language;

use Illuminate\Database\Eloquent\Model;

class LanguageName extends Model
{
    protected $primaryKey = 'L_N_ID';

    protected $table = 'language_name';

    protected $fillable = ['name'];
}

 // Schema::create('language_name', function (Blueprint $table) {
 //            $table->integer('L_N_ID')->nullable(false)->autoIncrement();
 //            $table->string('name');
 //            $table->timestamps();
 //        });