<?php

namespace App\Model\Person\Language;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $primaryKey = 'L_ID';

    protected $table = 'language';

    protected $fillable = ['P_ID','name'];
}


// Schema::create('language', function (Blueprint $table) {
//             $table->bigInteger('L_ID')->nullable(false)->autoIncrement();
//             $table->bigInteger('P_ID')->nullable(false);
//             $table->integer('name');
//             $table->timestamps();

//             $table->foreign('name')->references('L_N_ID')->on('language_name');
//             $table->foreign('P_ID')->references('P_ID')->on('person');
//         });