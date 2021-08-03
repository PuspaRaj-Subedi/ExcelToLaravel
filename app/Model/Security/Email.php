<?php

namespace App\Model\Security;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $primaryKey = 'EM_ID';

   protected $table = 'email';

   protected $fillable = ['email', 'is_Verified', 'is_Primary','U_ID'];
}
 // Schema::create('email', function (Blueprint $table) {
 //            $table->integer('EM_ID')->nullable(false)->autoIncrement();
 //            $table->string('email')->unique();
 //            $table->boolean('is_Verified')->nullable(false)->default(false);
 //            $table->boolean('is_Primary')->nullable(false)->default(false);
 //            $table->integer('U_ID')->nullable(false);
 //            $table->timestamps();

 //            $table->foreign('U_ID')->references('id')->on('users');
 //        });