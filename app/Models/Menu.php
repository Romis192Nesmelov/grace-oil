<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['ru','en','href','active','manager_id'];

    use HasSlug;

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('ru')
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

    public function subMenu()
    {
        return $this->hasMany('App\Models\SubMenu')->where('active',1);
    }

    public function manager()
    {
        return $this->belongsTo('App\Models\Manager');
    }

    public function content()
    {
        return $this->belongsTo('App\Models\Content');
    }
}