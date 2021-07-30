<?php

namespace App\Model\Sanstha\ForestArea;

use Illuminate\Database\Eloquent\Model;

class ForestArea extends Model
{
    protected $primaryKey = 'FA_ID';

    protected $table = 'forest_area';

    protected $fillable = ['name','cName', 'contact', 'staffM', 'staffF', 'coveredArea', 'type', 'lng', 'image', 'Wa_ID'];
}
