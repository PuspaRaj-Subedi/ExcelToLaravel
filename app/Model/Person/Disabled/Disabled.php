<?php

namespace App\Model\Person\Disabled;

use Illuminate\Database\Eloquent\Model;

class Disabled extends Model
{
    protected $primaryKey = 'D_ID';

    protected $table = 'disabled';

    protected $fillable = [
        'P_ID',
        'type',
        'reason'
    ];
//
//Schema::create('disabled', function (Blueprint $table) {
//    $table->bigInteger('D_ID')->nullable(false)->autoIncrement();
//    $table->bigInteger('P_ID')->nullable(false);
//    $table->integer('type')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('D_Ty_ID')->on('disabled_type');
//    $table->foreign('P_ID')->references('P_ID')->on('person');
//});
//
}
