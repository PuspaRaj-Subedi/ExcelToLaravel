<?php

namespace App\Model\Family\Agriculture\Manure;

use App\Model\Family\Agriculture\Machine\AgricultureMachine;
use App\Model\Family\Agriculture\Machine\AgricultureMachineType;
use Illuminate\Database\Eloquent\Model;

class AgricultureManureType extends Model
{
    protected $primaryKey = 'AgM_Ty_ID';

    protected $table = 'agriculture_manure_type';

    protected $fillable = ['name'];


//Schema::create('agriculture_manure_type', function (Blueprint $table) {
//    $table->integer('AgM_Ty_ID')->nullable(false)->autoIncrement();
//    $table->string('name')->nullable(false);
//    $table->timestamps();
//});

public function family() {
    return $this->belongsToMany(AgricultureManureType::class, AgricultureManure::class, 'type', 'F_ID');
}

}
