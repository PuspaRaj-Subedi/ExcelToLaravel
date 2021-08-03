<?php

namespace App\Model\Address;

use Illuminate\Database\Eloquent\Model;

class Gaun extends Model
{
    protected $primaryKey = 'Ga_ID';

    protected $table = 'gaun';

    protected $fillable = ['name','Wa_ID'];
}
