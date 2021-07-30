<?php

namespace App\Model\Sanstha;

use Illuminate\Database\Eloquent\Model;

class TouristArea extends Model
{
    protected $primaryKey = 'TA_ID';

    protected $table = 'tourist_area';

    protected $fillable = ['name','address','contact','type','desc','famousFor', 'timeToReach', 'roadAccess', 'lng', 'image', 'Wa_ID'];
}

// Schema::create('tourist_area', function (Blueprint $table) {
//             $table->bigInteger('TA_ID');
//             $table->string('name');
//             $table->string('address');
//             $table->string('contact');
//             $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Public\n1:  Private\n2: Government\n');
//             $table->text('desc');
//             $table->text('famousFor');
//             $table->integer('Wa_ID');
//             $table->timestamps();

//             $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
//         });
