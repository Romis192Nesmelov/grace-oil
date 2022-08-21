<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class IndustrySolution extends Model
{
    protected $fillable = [
        'image',
        'name_ru',
        'name_en',
        'text_ru',
        'text_en',
        'head_ru',
        'head_en',
        'active',
        'brochure_id'
    ];

    use HasSlug;

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_en')
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

    public function brochure()
    {
        return $this->belongsTo('App\Models\Brochure');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\ReviewToSolution');
    }
}