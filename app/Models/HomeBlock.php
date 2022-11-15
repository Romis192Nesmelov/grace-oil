<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class HomeBlock extends Model
{
    protected $fillable = [
        'image',
        'head_ru',
        'text_ru',
        'head_en',
        'text_en',
//        'href',
        'button_text_ru',
        'button_text_en',
        'active',
        'menu_id',
        'sub_menu_id'
    ];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function subMenu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
}