<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ReviewToSolution extends Model
{
    protected $fillable = ['review_id','industry_solution_id'];

    public $timestamps = false;

    public function review()
    {
        return $this->belongsTo('App\Models\News');
    }

    public function similar()
    {
        return $this->belongsTo('App\Models\IndustrySolution');
    }
}