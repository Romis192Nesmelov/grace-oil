<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Oil extends Model
{
    protected $fillable = [
        'image_base',
        'image_1',
        'image_4',
        'image_20',
        'image_180',
        'image_1000',
        'name',
        'head_ru',
        'head_en',
        'description_ru',
        'description_en',
        'application_area_ru',
        'application_area_en',
        'advantages_ru',
        'advantages_en',
        'engine_type',
        'active',
        'oil_type_id',
        'viscosity_grade_id',
        'subsection_id'
    ];

    use HasSlug;

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
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

    public function oilType()
    {
        return $this->belongsTo('App\Models\OilType');
    }

    public function viscosity()
    {
        return $this->belongsTo('App\Models\ViscosityGrade','viscosity_grade_id');
    }

    public function documentations()
    {
        return $this->hasMany('App\Models\Documentation');
    }

    public function toTolerances()
    {
        return $this->hasMany('App\Models\OilTolerance');
    }

    public function subsection()
    {
        return $this->belongsTo('App\Models\Subsection');
    }
}