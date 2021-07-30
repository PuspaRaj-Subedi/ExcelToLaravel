<?php

namespace App\Model\Family\Land;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $primaryKey = 'La_ID';

    protected $table = 'land';

    protected $fillable = ['living', 'fertile', 'barren', 'irrigationType', 'irrigation', 'registered', 'unregistered', 'total',  'F_ID', 'TBS_ID', 'Gaun_ID', 'WA_ID'];
}
