<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tolerance extends Model
{
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function toOil()
    {
        return $this->hasMany('App\Models\OilsTolerance');
    }
}