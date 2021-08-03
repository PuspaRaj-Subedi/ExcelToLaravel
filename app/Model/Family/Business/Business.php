<?php

namespace App\Model\Family\Business;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $primaryKey = 'Bs_ID';

    protected $table = 'business';

    protected $fillable = ['income', 'invest', 'address', 'type', 'F_ID'];
}


//Schema::create('business', function (Blueprint $table) {
//    $table->bigInteger('Bs_ID')->nullable(false)->autoIncrement();
//    $table->integer('income')->nullable(false)->default(0);
//    $table->integer('invest')->nullable(false)->default(0);
//    $table->string('address')->nullable(false)->comment('This is to be replaced by addess table and its entities\n');
//    $table->integer('type')->nullable(false);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('Bs_Ty_ID')->on('business_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
