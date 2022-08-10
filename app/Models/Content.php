<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'preview',
        'full',
        'head_ru',
        'head_en',
        'text_ru',
        'text_en',
        'active'
    ];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function subMenu()
    {
        return $this->belongsTo('App\Models\SubMenu');
    }
}