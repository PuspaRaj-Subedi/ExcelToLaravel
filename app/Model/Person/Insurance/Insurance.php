<?php

namespace App\Model\Person\Insurance;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $primaryKey = 'I_ID';

   protected $table = 'insurance';

   protected $fillable = ['P_ID','type'];
}


//Schema::create('insurance', function (Blueprint $table) {
            //$table->bigInteger('I_ID')->nullable(false)->autoIncrement();
            //$table->bigInteger('P_ID')->nullable(false);
            //$table->integer('type')->nullable(false);
           // $table->timestamps();
