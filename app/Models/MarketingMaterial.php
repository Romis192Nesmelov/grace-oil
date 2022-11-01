<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MarketingMaterial extends Model
{
    protected $fillable = [
        'active',
        'brochure_id'
    ];

    public function brochure()
    {
        return $this->belongsTo('App\Models\Brochure');
    }
}