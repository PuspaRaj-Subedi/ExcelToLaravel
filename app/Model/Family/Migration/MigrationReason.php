<?php

namespace App\Model\Family\Migration;

use Illuminate\Database\Eloquent\Model;

class MigrationReason extends Model
{
    protected $primaryKey = 'M_R_ID';

    protected $table = 'migration_reason';

    protected $fillable = ['name'];
}

//Schema::create('migration_reason', function (Blueprint $table) {
//    $table->integer('M_R_ID')->autoIncrement();
//    $table->string('name');
//    $table->timestamps();
//});
