<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $fillable = ['preview','full','news_id'];

    public function menu()
    {
        return $this->belongsTo('App\Models\News');
    }
}