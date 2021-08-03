<?php

namespace App\Model\Family\Business;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    protected $primaryKey = 'Bs_Ty_ID';

    protected $table = 'business_type';

    protected $fillable = ['name'];
}


//Schema::create('business_type', function (Blueprint $table) {
//    $table->integer('Bs_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
