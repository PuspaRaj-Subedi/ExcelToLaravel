<?php

namespace App\Model\Address;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nagar extends Model
{
    protected $primaryKey = 'Ng_ID';

    protected $table = 'nagar';

    protected $fillable = ['name'];


//Schema::create('nagar', function (Blueprint $table) {
//    $table->integer('Ng_ID')->nullable(false)->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
}
