<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NotifyAdmin extends Model {

    protected $table = 'notify_admin';

    protected $fillable = ['session_id', 'user', 'problem_type', 'desc', 'status'];

}
