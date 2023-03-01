<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DealersArea extends Model
{
    protected $fillable = [
        'name_ru',
        'name_en'
    ];

    public $timestamps = false;

    public function dealers()
    {
        return $this->hasMany('App\Models\Dealer')->where('active',1);
    }
}