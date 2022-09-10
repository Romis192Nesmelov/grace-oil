<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    protected $fillable = ['name_ru','name_en'];

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
}