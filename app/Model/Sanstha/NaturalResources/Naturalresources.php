<?php

namespace App\Model\Sanstha\NaturalResources;

use Illuminate\Database\Eloquent\Model;

class Naturalresources extends Model {

   protected $primaryKey = 'NR_ID';

   protected $table = 'natural_resources';

   protected $fillable = ['roadAccess','name','type','coveredArea','timeToReach', 'lng', 'image', 'Wa_ID'];
}

// Schema::create('natural_resources', function (Blueprint $table) {
//             $table->bigInteger('NR_ID')->autoIncrement();
//             $table->string('name');
//             $table->integer('type');
//             $table->integer('coveredArea');
//             $table->integer('timeToReach');
//             $table->integer('Wa_ID');
//             $table->timestamps();

//             $table->foreign('type')->references('NR_Ty_ID')->on('natural_resources_type');
//             $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
//         });
