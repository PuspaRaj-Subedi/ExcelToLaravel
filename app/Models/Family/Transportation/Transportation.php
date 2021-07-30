<?php

namespace App\Model\Family\Transportation;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    protected $primaryKey = 'Tr_ID';

    protected $table = 'transportation';

    protected $fillable = ['type', 'number', 'investment', 'loan', 'profit', 'income', 'Tr_Type', 'F_ID'];
}


//Schema::create('transportation', function (Blueprint $table) {
//    $table->bigInteger('Tr_ID')->nullable(false)->autoIncrement();
//    $table->enum('type',["0", "1", "2"])->nullable('false')->default(1)->comment('0:Public\n1: Private\n2: Government\n');
//    $table->integer('number')->nullable(false)->default(1);
//    $table->integer('investment')->nullable(false)->default(0);
//    $table->integer('loan')->nullable(false)->default(0);
//    $table->integer('profit')->nullable(false)->default(0);
//    $table->integer('income')->nullable(false)->default(0);
//    $table->integer('Tr_Type')->nullable(false);
//    $table->bigInteger('F_ID')->nullable(false);
//    $table->timestamps();
//
//    $table->foreign('Tr_Type')->references('Tr_Ty_ID')->on('transportation_type');
//    $table->foreign('F_ID')->references('F_ID')->on('family');
//});
