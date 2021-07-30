<?php

namespace App\Model\Address;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $primaryKey = 'Wd_ID';

    protected $table = 'ward';

    protected $fillable = ['name'];

//Schema::create('ward', function (Blueprint $table) {
//    $table->integer('Wd_ID')->nullable(false)->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
}
