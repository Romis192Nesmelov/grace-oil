<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    protected $fillable = [
        'tare',
        'bar_code',
        'ozon',
        'wb',
        'oil_id'
    ];

    public $timestamps = false;

    public function oil()
    {
        return $this->belongsTo('App\Models\Oil');
    }
}