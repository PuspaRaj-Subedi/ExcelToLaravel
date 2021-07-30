<?php

namespace App\Model\Person\Health;

use Illuminate\Database\Eloquent\Model;

class HealthType extends Model
{
    protected $primaryKey = 'H_Ty_ID';

   protected $table = 'health_type';

   protected $fillable = ['type'];
}

// Schema::create('health_type', function (Blueprint $table) {
//             $table->integer('H_Ty_ID')->nullable(false)->autoIncrement();
//             $table->integer('type');
//             $table->timestamps();
    
//         });