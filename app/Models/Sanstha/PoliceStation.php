<?php

namespace App\Model\Sanstha;

use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    protected $primaryKey = 'PS_ID';

   protected $table = 'police_station';

   protected $fillable = ['name','chiefName','address','contact','staffM','staffF', 'lng', 'image', 'Wa_ID'];
}
 // Schema::create('police_station', function (Blueprint $table) {
 //            $table->bigInteger('PS_ID');
 //            $table->string('name');
 //            $table->string('address');
 //            $table->string('contact');
 //            $table->integer('staffM');
 //            $table->integer('staffF');
 //            $table->integer('Wa_ID');
 //            $table->timestamps();

 //            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
 //        });
