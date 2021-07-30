<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserWada extends Model
{

    protected $table = 'table_user_wada';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'u_id', 'wa_id'
    ];

}
