<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class DataEntrySession extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'data_entry_session';

    protected $fillable = ['data', 'status', 'u_id', 'wa_id'];
}