<?php

namespace App\Model\Address;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $primaryKey = 'Ds_ID';

    protected $table = 'district';

    protected $fillable = ['name'];

//Schema::create('district', function (Blueprint $table) {
//    $table->integer('Ds_ID')->nullable(false)->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
}
