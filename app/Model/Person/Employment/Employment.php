<?php

namespace App\Model\Person\Employment;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $primaryKey = 'Emp_ID';

    protected $table = 'employment';

    protected $fillable = ['P_ID', 'type', 'name', 'post', 'income', 'sd', 'ed'];
}


//Schema::create('employment', function (Blueprint $table) {
//$table->bigInteger('Emp_ID')->nullable(false)->autoIncrement();
//$table->bigInteger('P_ID')->nullable(false);
//$table->integer('type')->nullable(false);
//$table->integer('name');
//$table->integer('income');
//$table->date('sd');
//$table->date('ed');
//$table->timestamps();
