<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'href',
        'image',
        'head_ru',
        'sub_head_ru',
        'text_ru',
        'head_en',
        'sub_head_en',
        'text_en',
        'active'
    ];
}