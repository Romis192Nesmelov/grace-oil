<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'image',
        'head_ru',
        'head_en',
        'time',
        'text_short_ru',
        'text_short_en',
        'text_full_ru',
        'text_full_en',
        'active'
    ];

    use HasSlug;

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('head_en')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function newsImages()
    {
        return $this->hasMany('App\Models\NewsImage');
    }

    public function similarNews()
    {
        return $this->hasMany('App\Models\SimilarNews');
    }

    public function similar()
    {
        return $this->belongsToMany('App\Models\News', 'similar_news', 'news_id','similar_id');
    }
}