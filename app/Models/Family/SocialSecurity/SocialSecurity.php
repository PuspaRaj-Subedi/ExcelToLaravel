<?php

namespace App\Model\Family\SocialSecurity;

use Illuminate\Database\Eloquent\Model;

class SocialSecurity extends Model
{
    protected $primaryKey = 'SS_ID';

    protected $table = 'social_security';

    protected $fillable = ['date', 'type', 'lossQuantity', 'lossType', 'F_ID'];
}


//Schema::create('social_security', function (Blueprint $table) {
//    $table->bigInteger('SS_ID')->nullable(false)->autoIncrement();
//    $table->date('date')->nullable(false);
//    $table->integer('type')->nullable(false);
//    $table->string('lossQuantity')->nullable(false);
//    $table->boolean('lossType')->nullable(false)->comment('0: People\n1: Property\n');
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('SS_Ty_ID')->on('social_security_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
