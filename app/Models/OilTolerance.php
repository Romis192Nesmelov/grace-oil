<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OilTolerance extends Model
{
    protected $table = 'oil_tolerances';

    protected $fillable = [
        'oil_id',
        'tolerance_id',
    ];

    public $timestamps = false;

    public function oil()
    {
        return $this->belongsTo('App\Models\Oil');
    }

    public function tolerance()
    {
        return $this->belongsTo('App\Models\Tolerance');
    }
}