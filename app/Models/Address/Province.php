<?php

namespace App\Model\Address;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey = 'Pr_ID';

    protected $table = 'province';

    protected $fillable = ['name'];
}


//Schema::create('province', function (Blueprint $table) {
//    $table->integer('Pr_ID')->nullable(false)->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
