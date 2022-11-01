<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class OilType extends Model
{
    protected $fillable = [
        'icon',
        'name_ru',
        'name_en',
        'active'
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

    public function oils()
    {
        return $this->hasMany('App\Models\Oil');
    }
    
//    public function industrySolution()
//    {
//        return $this->belongsTo('App\Models\IndustrySolution');
//    }
}