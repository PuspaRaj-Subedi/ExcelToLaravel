<?php

namespace App\Model\Family\Death;

use App\Model\Person\Person;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    protected $primaryKey = 'De_ID';

    protected $table = 'death';

    protected $fillable = ['reason', 'date', 'P_ID'];

    public function people()
    {
        return $this->hasOne(Person::class, 'P_ID', 'P_ID');
    }
}



//Schema::create('death', function (Blueprint $table) {
//    $table->bigInteger('De_ID')->autoIncrement();
//    $table->integer('reason');
//    $table->date('date');
//    $table->bigInteger('P_ID');
//    $table->timestamps();
//
//    $table->foreign('reason')->references('De_R_ID')->on('death_reason');
//    $table->foreign('P_ID')->references('P_ID')->on('person');
//});
