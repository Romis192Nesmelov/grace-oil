<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    protected $fillable = [
        'href',
        'name_ru',
        'name_en',
        'oil_id'
    ];

    public $timestamps = false;

    public function oil()
    {
        return $this->belongsTo('App\Models\Oil');
    }
}