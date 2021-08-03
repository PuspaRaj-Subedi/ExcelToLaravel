<?php

namespace App\Model\Person\Hobby;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $primaryKey = 'Hb_ID';

   protected $table = 'hobby';

   protected $fillable = ['P_ID','type'];
}



//Schema::create('hobby', function (Blueprint $table) {
            //$table->bigInteger('Hb_ID')->nullable(false)->autoIncrement();
            //$table->bigInteger('P_ID')->nullable(false);
            //$table->integer('type')->nullable(false);
            //$table->timestamps();