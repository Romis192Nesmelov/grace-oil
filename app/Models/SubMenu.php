<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $fillable = [
        'ru',
        'en',
        'add_content_model',
        'view',
        'slug_view',
        'active',
        'menu_id',
        'manager_id'
    ];

    use HasSlug;

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('en')
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
    
    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function manager()
    {
        return $this->belongsTo('App\Models\Manager');
    }

    public function content()
    {
        return $this->hasMany('App\Models\Content')->where('active',1);
    }

    public function homeBlocks()
    {
        return $this->hasMany('App\Models\HomeBlock')->where('active',1);
    }
}