<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OilEngineType extends Model
{
    protected $table = 'oil_engine_types';

    protected $fillable = [
        'oil_id',
        'engine_type_id',
    ];

    public $timestamps = false;

    public function oil()
    {
        return $this->belongsTo('App\Models\Oil');
    }

    public function tolerance()
    {
        return $this->belongsTo('App\Models\EngineType');
    }
}