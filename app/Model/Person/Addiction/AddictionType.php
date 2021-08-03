<?php

namespace App\Model\Person\Addiction;

use Illuminate\Database\Eloquent\Model;

class AddictionType extends Model
{
    protected $primaryKey = 'A_Ty_ID';

   protected $table = 'addiction_type';

   protected $fillable = ['name'];
}

  // Schema::create('addiction_type', function (Blueprint $table) {
  //           $table->integer('A_Ty_ID')->autoIncrement();
  //           $table->string('name')->nullable(false);
  //           $table->timestamps();
  //       });
  //   }