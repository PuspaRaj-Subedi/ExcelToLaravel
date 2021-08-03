<?php

namespace App\Model\Family\Transportation;

use Illuminate\Database\Eloquent\Model;

class TransportationType extends Model
{
    protected $primaryKey = 'Tr_Ty_ID';

    protected $table = 'transportation_type';

    protected $fillable = ['name'];
}



//Schema::create('transportation_type', function (Blueprint $table) {
//    $table->integer('Tr_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
