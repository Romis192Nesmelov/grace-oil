<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $fillable = [
        'image',
        'town_ru',
        'town_en',
        'name_ru',
        'name_en',
        'phone',
        'email',
        'url',
        'active',
        'dealers_area_id'
    ];

    public $timestamps = false;

    public function area()
    {
        return $this->belongsTo('App\Models\DealersArea');
    }
}