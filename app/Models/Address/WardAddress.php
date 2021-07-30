<?php

namespace App\Model\Address;

use App\Model\UserWada;
use App\User;
use Illuminate\Database\Eloquent\Model;

class WardAddress extends Model
{
    protected $primaryKey = 'WA_ID';

    protected $table = 'ward_address';

    protected $fillable = ['name', 'Province', 'District', 'Nagar', 'Ward'];

    public function user(){
        return $this->belongsToMany(User::class, UserWada::class, 'wa_id', 'u_id');
    }

    public function province(){
        return $this->belongsTo(Province::class, 'Province', 'Pr_ID');
    }

    public function district(){
        return $this->belongsTo(District::class, 'District', 'Ds_ID');
    }

    public function nagar(){
        return $this->belongsTo(Nagar::class, 'Nagar', 'Ng_ID');
    }

    public function ward(){
        return $this->belongsTo(Ward::class, 'Ward', 'Wd_ID');
    }

}
