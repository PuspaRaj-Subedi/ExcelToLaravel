<?php

namespace App\Model\Person\Employment;

use Illuminate\Database\Eloquent\Model;

class EmploymentPost extends Model
{
    protected $primaryKey = 'Emp_Po_ID';

    protected $table = 'employment_post';

    protected $fillable = ['name'];
}
