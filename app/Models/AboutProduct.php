<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AboutProduct extends Model
{
    protected $fillable = [
        'image',
        'head_ru',
        'head_en',
        'text_ru',
        'text_en',
        'active',
        'brochure_id'
    ];

    public function brochure()
    {
        return $this->belongsTo('App\Models\Brochure');
    }
}