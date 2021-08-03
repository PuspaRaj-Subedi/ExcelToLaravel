<?php

namespace App\Model\Sanstha\Others;

use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
    protected $primaryKey = 'O_ID';

   protected $table = 'others';

   protected $fillable = ['name','cname','address','contact','type','staffM','staffF', 'lng', 'image', 'Wa_ID'];
}

  // Schema::create('others', function (Blueprint $table) {
  //           $table->bigInteger('O_ID');
  //           $table->string('name');
  //           $table->string('address');
  //           $table->string('contact');
  //           $table->integer('type');
  //           $table->integer('staffM');
  //           $table->integer('staffF');
  //           $table->integer('Wa_ID');
  //           $table->timestamps();

  //           $table->foreign('type')->references('O_Ty_ID')->on('others_type');
  //           $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
  //       });
