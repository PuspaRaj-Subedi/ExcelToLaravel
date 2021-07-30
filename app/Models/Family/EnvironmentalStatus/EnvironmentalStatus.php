<?php

namespace App\Model\Family\EnvironmentalStatus;

use Illuminate\Database\Eloquent\Model;

class EnvironmentalStatus extends Model
{
    protected $primaryKey = 'ES_ID';

    protected $table = 'environmental_status';

    protected $fillable = ['dateFrom', 'dateTo', 'type', 'reason', 'affectedPopulation', 'F_ID'];
}


//Schema::create('environmental_status', function (Blueprint $table) {
//    $table->bigInteger('ES_ID')->nullable(false)->autoIncrement();
//    $table->date('dateFrom')->nullable(false);
//    $table->date('dateTo')->nullable(false);
//    $table->integer('type')->nullable(false);
//    $table->text('reason');
//    $table->integer('affectedPopulation')->nullable(false)->default(0);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('type')->references('ES_Ty_ID')->on('environmental_status_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
