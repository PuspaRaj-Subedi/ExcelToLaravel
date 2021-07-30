<?php

namespace App\Model\Family\Production;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $primaryKey = 'Pr_ID';

    protected $table = 'production';

    protected $fillable = ['productionArea', 'quantity', 'use', 'sell', 'type', 'type_type', 'F_ID'];
}
