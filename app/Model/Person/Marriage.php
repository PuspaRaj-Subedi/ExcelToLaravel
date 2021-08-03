<?php

namespace App\Model\Person;

use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    protected $primaryKey = 'Ma_ID';

    protected $table = 'marriage';

    protected $fillable = ['date', 'bride', 'brideGroom', 'status', 'type'];
}
