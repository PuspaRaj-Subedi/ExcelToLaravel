<?php

namespace App\Model\Person\Disabled;

use Illuminate\Database\Eloquent\Model;

class DisabledType extends Model
{
    protected $primaryKey = 'D_Ty_ID';

   protected $table = 'disabled_type';

   protected $fillable = ['name'];
}


// Schema::create('disabled_type', function (Blueprint $table) {
//             $table->integer('D_Ty_ID')->nullable(false)->autoIncrement();
//             $table->string('name');
//             $table->timestamps();
//         });