<?php

namespace App\Model\Person\Allowance;

use Illuminate\Database\Eloquent\Model;

class AllowanceType extends Model
{
    protected $primaryKey = 'Al_`Ty_ID';

    protected $table = 'allowance_type';

    protected $fillable = ['name'];
}
