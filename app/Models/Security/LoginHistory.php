<?php

namespace App\Model\Security;

use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    protected $primaryKey = 'LH_ID';

   protected $table = 'login_history';

   protected $fillable = ['ip', 'type','U_ID'];
}
// Schema::create('login_history', function (Blueprint $table) {
//             $table->unsignedBigInteger('LH_ID')->nullable(false)->autoIncrement();
//             $table->integer('U_ID')->nullable(false);
//             $table->ipAddress('ip')->nullable(false);
//             $table->enum('type',['login','logout'])->nullable(false);
//             $table->timestamps();

//             $table->foreign('U_ID')->references('id')->on('users');

// //            $table->engine("INNODB");
//         });