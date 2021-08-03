<?php

namespace App\Model\Person\Health;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
   protected $primaryKey = 'H_ID';

   protected $table = 'health';

   protected $fillable = ['type', 'startedDate' ,'P_ID'];
}


//Schema::create('health', function (Blueprint $table) {
            //$table->bigInteger('H_ID')->nullable(false)->autoIncrement();
            //$table->bigInteger('P_ID')->nullable(false);
            //$table->integer('type')->nullable(false);
            //$table->timestamps();
