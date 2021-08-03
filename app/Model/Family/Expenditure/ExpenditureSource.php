<?php

namespace App\Model\Family\Expenditure;

use Illuminate\Database\Eloquent\Model;

class ExpenditureSource extends Model
{
    protected $primaryKey = 'Ex_S_ID';

    protected $table = 'expenditure_source';

    protected $fillable = ['name'];
}


//Schema::create('expenditure_source', function (Blueprint $table) {
//    $table->integer('Ex_S_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});
