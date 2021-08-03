<?php

namespace App\Model\Family\Migration;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    protected $primaryKey = 'Mg_ID';

    protected $table = 'migration';

    protected $fillable = ['where', 'reason', 'date'];
}

//Schema::create('migration', function (Blueprint $table) {
//    $table->bigInteger('Mg_ID')->nullable(false)->autoIncrement();
//    $table->string("where")->nullable(false);
//    $table->integer('reason')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('reason')->references('M_R_ID')->on('migration_reason');
//});
