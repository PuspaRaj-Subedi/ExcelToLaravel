<?php

namespace App\Model\Sanstha;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
   protected $primaryKey = 'Ro_ID';

   protected $table = 'road';

   protected $fillable = ['name','length','breadth','type', 'lng', 'image', 'Wa_ID'];
}

// Schema::create('road', function (Blueprint $table) {
//             $table->bigInteger('Ro_ID');
//             $table->string('name');
//             $table->integer('length');
//             $table->integer('breadth');
//             $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Kacchi\n1:  Pakki / Pitched\n2: Gravelled\n');
//             $table->integer('Wa_ID');
//             $table->timestamps();

//             $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
//         });
