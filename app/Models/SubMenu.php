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
        'active',
        'manager_id'
    ];

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
}