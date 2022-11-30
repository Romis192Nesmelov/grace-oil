<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tare extends Model
{
    protected $fillable = [
        'image',
        'value',
        'oil_id'
    ];

    public $timestamps = false;

    public function oil()
    {
        return $this->belongsTo('App\Models\Oil');
    }
}