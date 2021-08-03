<?php

namespace App\Model\Address;

use Illuminate\Database\Eloquent\Model;

class TBS extends Model
{
    protected $primaryKey = 'TBS_ID';

    protected $table = 'tbs';

    protected $fillable = ['name','Ga_ID'];


//Schema::create('tbs', function (Blueprint $table) {
//    $table->integer('TBS_ID')->nullable(false)->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
}
