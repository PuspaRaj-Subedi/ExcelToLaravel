<?php

namespace App\Model\Sanstha\FamousPersonalities;

use Illuminate\Database\Eloquent\Model;

class FamousPersonalities extends Model
{
    protected $primaryKey = 'FP_ID';

    protected $table = 'famous_personalities';

    protected $fillable = ['name', 'address', 'awardsReceived', 'workingField', 'lng', 'image', 'WA_ID'];
}


//Schema::create('famous_personalities', function (Blueprint $table) {
//    $table->bigInteger('FP_ID')->autoIncrement();
//    $table->string('name');
//    $table->string('address');
//    $table->text('awardsReceived');
//    $table->integer('workingField');
//    $table->integer('Wa_ID');
//    $table->timestamps();
//
//    $table->foreign('workingField')->references('FP_WF_ID')->on('famous_personalities_working_field');
//    $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
//});
