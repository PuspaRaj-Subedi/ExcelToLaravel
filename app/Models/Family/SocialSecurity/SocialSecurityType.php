<?php

namespace App\Model\Family\SocialSecurity;

use Illuminate\Database\Eloquent\Model;

class SocialSecurityType extends Model
{
    protected $primaryKey = 'SS_Ty_ID';

    protected $table = 'social_security_type';

    protected $fillable = ['name'];
}


//Schema::create('social_security_type', function (Blueprint $table) {
//    $table->integer('SS_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
