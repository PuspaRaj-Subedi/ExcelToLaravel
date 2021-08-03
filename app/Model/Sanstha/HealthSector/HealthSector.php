<?php

namespace App\Model\Sanstha\HealthSector;

use Illuminate\Database\Eloquent\Model;

class HealthSector extends Model
{
    protected $primaryKey = 'Hes';

   protected $table = 'health_sector';

   protected $fillable = ['name','address','contact','registered','doctorNo','nurseNo','type','staffM','staffF', 'lng', 'image', 'Wa_ID'];
}


 // Schema::create('health_sector', function (Blueprint $table) {
 //            $table->bigInteger('HeS')->autoIncrement();
 //            $table->string('name');
 //            $table->string('address');
 //            $table->string('contact');
 //            $table->boolean('registered');
 //            $table->enum('type',["0", "1", "2"])->default(1)->comment('0 : Public\n1:  Private\n2: Government\n');
 //            $table->integer('doctorNo');
 //            $table->integer('nurseNo');
 //            $table->integer('straffM');
 //            $table->integer('staffF');
 //            $table->integer('Wa_ID');
 //            $table->timestamps();

 //            $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
 //        });
