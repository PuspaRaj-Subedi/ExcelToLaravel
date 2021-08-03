<?php

namespace App\Model\Person\Addiction;

use Illuminate\Database\Eloquent\Model;

class Addiction extends Model
{
    protected $primaryKey = 'A_ID';

    protected $table = 'addiction';

    protected $fillable = [
        'P_ID',
        'type',
        'expenditure',
        'reason',
        'sd',
        'ed'
    ];

//Schema::create('addiction', function (Blueprint $table) {
//    $table->bigInteger('A_ID')->nullable(false)->autoIncrement();
//    $table->bigInteger('P_ID')->nullable(false);
//    $table->integer('type')->nullable(false);
//    $table->text('reason')->nullable();
//    $table->date('sd');
//    $table->date('ed');
//    $table->timestamps();
//
//    $table->foreign('type')->references('A_Ty_ID')->on('addiction_type');
//    $table->foreign('P_ID')->references('P_ID')->on('person');
//});

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
