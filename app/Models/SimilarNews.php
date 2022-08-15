<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SimilarNews extends Model
{
    protected $fillable = ['news_id','similar_id'];

    public $timestamps = false;

    public function news()
    {
        return $this->belongsTo('App\Models\News');
    }

    public function similar()
    {
        return $this->belongsTo('App\Models\News','similar_id');
    }
}