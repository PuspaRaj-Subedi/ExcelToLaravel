<?php

namespace App\Model\Sanstha\ForestArea;

use Illuminate\Database\Eloquent\Model;

class ForestAreaType extends Model
{
    protected $primaryKey = 'FA_Ty_ID';

    protected $table = 'forest_area_type';

    protected $fillable = ['name'];
}
