<?php

namespace App\Model\Family\Agriculture\Machine;

use Illuminate\Database\Eloquent\Model;

class AgricultureMachine extends Model
{
    protected $primaryKey = 'AM_ID';

    protected $table = 'agriculture_machine';

    protected $fillable = [
     'bought',
     'rate',
     'type',
     'F_ID'
     ];


//    $table->bigInteger('AM_ID')->nullable(false)->autoIncrement();
//    $table->boolean('bought')->nullable(false)->default(false)->comment('0: Not Bought\n1: Bought\n');
//    $table->text('rate')->nullable(false);
//    $table->integer('type')->nullable(false);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('AM_Ty_ID')->on('agriculture_machine_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
}
