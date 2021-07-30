<?php

namespace App\Model\Family\Agriculture\Machine;

use App\Model\Family\Family;
use Illuminate\Database\Eloquent\Model;

class AgricultureMachineType extends Model
{
    protected $primaryKey = 'AM_Ty_ID';

    protected $table = 'agriculture_machine_type';

    protected $fillable = ['name'];

    public  function family(){
        return $this->belongsToMany(AgricultureMachineType::class, Family::class, 'type', 'F_ID' );
    }
}
