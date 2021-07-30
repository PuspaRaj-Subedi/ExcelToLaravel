<?php

namespace App\Model\Security;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $primaryKey = 'Ses_ID';

   protected $table = 'session';

   protected $fillable = ['hash', 'cookie', 'session','U_ID'];
}

  // Schema::create('session', function (Blueprint $table) {
  //           $table->bigInteger('Ses_ID')->autoIncrement();
  //           $table->integer('U_ID');
  //           $table->string('hash')->nullable();
  //           $table->string('cookie')->nullable();
  //           $table->string('session')->nullable();
  //           $table->timestamps();


  //           $table->foreign('U_ID')->references('id')->on('users');
  //       });