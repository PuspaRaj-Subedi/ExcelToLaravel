<?php

namespace App\Model\Family\Production;

use Illuminate\Database\Eloquent\Model;

class ProductionType extends Model
{
    protected $primaryKey = 'Pr_Ty_ID';

    protected $table = 'production_type';

    protected $fillable = ['name'];
}

//Schema::create('production_type', function (Blueprint $table) {
//    $table->integer('Pr_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});

