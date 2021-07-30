<?php

namespace App\Model\Sanstha\Temple;

use Illuminate\Database\Eloquent\Model;

class Temple extends Model
{
    protected $primaryKey = 'Tp_ID';

   protected $table = 'temple';

   protected $fillable = ['presidentName', 'address', 'contact', 'type', 'lng', 'image',  'Wa_ID'];
}
// Schema::create('temple', function (Blueprint $table) {
//             $table->bigInteger('Tp_ID');
//             $table->string('address');
//             $table->string('contact');
//             $table->integer('type');
//             $table->integer('Wa_ID');
//             $table->timestamps();

//             $table->foreign('type')->references('Tp_Ty_ID')->on('temple_type');
//             $table->foreign('Wa_ID')->references('Wa_ID')->on('ward_address');
//         });
