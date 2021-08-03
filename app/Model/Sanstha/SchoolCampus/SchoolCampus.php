<?php

namespace App\Model\Sanstha\SchoolCampus;

use Illuminate\Database\Eloquent\Model;

class SchoolCampus extends Model
{
    protected $primaryKey = 'SeCa_ID';

   protected $table = 'school_campus';

   protected $fillable = ['name', 'cname' ,'address','contact','type','studentM','studentF', 'lng', 'image', 'Wa_ID'];
}


// Schema::create('school_campus', function (Blueprint $table) {
//             $table->bigInteger('SeCa_ID');
//             $table->string('name');
//             $table->string('address');
//             $table->string('contact');
//             $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Public\n1:  Private\n2: Government\n');
//             $table->integer('studentM');
//             $table->integer('studentF');
//             $table->integer('staffM');
//             $table->integer('staffF');
//             $table->integer('Wa_ID');
//             $table->timestamps();

//             $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');

//         });
