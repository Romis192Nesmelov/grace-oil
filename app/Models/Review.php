<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'preview',
        'full',
        'name_ru',
        'name_en',
        'active'
    ];

    public function solutions()
    {
        return $this->hasMany('App\Models\ReviewToSolution');
    }
}