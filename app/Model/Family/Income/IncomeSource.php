<?php

namespace App\Model\Family\Income;

use Illuminate\Database\Eloquent\Model;

class IncomeSource extends Model
{
    protected $primaryKey = 'In_S_ID';

    protected $table = 'income_source';

    protected $fillable = ['name'];
}


//Schema::create('income_source', function (Blueprint $table) {
//    $table->integer('In_S_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
