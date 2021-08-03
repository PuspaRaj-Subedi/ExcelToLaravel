<?php

namespace App\Model\Person\Allowance;

use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    protected $primaryKey = 'Al_ID';

    protected $table = 'allowance';

    protected $fillable = [
        'Al_ID',
        'P_ID',
        'type',
        'perMonth',
        'sd',
    ];
}
