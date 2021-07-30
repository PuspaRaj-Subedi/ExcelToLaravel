<?php

namespace App\Model\Security;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $primaryKey = 'Lg_Id';

    protected $table = 'log';

    protected $fillable = ['ip', 'type', 'details', 'table', 'U_ID'];

    //        Schema::create('log', function (Blueprint $table) {
//    $table->bigInteger('Lg_ID')->nullable(false)->autoIncrement();
//    $table->ipAddress('ip')->nullable('false');
//    $table->string('type');
//    $table->text('details');
//    $table->string('table')->nullable(false);
//    $table->integer('U_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('U_ID')->references('id')->on('users');
//});
//    }

    //
}
