<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['preview','full','active'];

    public function brochure()
    {
        return $this->hasMany('App\Models\ReviewToSolution');
    }
}