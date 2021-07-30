<?php

namespace App\Model\Sanstha\IndustrialArea;

use Illuminate\Database\Eloquent\Model;

class IndustrialArea extends Model
{
    protected $primaryKey = 'IA_ID';

   protected $table = 'industrial_area';

   protected $fillable = ['name','address','contact','type','staffM','staffF','is_Running', 'ownersName', 'investment', 'shares', 'lng', 'image', 'Wa_ID'];
}


 // Schema::create('industrial_area', function (Blueprint $table) {
 //            $table->bigInteger('IA_ID')->autoIncrement();
 //            $table->string('name');
 //            $table->string('address');
 //            $table->string('contact');
 //            $table->integer('type');
 //            $table->integer('staffM');
 //            $table->integer('staffF');
 //            $table->boolean('is_Running');
 //            $table->string('ownersName');
 //            $table->integer('Wa_ID');
 //            $table->timestamps();

 //            $table->foreign('type')->references('IA_Ty_ID')->on('industrial_area_type');
 //            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
 //        });
