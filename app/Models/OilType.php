<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OilType extends Model
{
    protected $fillable = [
        'icon',
        'name_ru',
        'name_en',
        'active'
    ];

//    public function industrySolution()
//    {
//        return $this->belongsTo('App\Models\IndustrySolution');
//    }
}