<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OilSolution extends Model
{
    protected $table = 'oil_solutions';

    protected $fillable = [
        'oil_id',
        'industry_solution_id',
    ];

    public $timestamps = false;

    public function oil()
    {
        return $this->belongsTo('App\Models\Oil');
    }

    public function industrySolution()
    {
        return $this->belongsTo('App\Models\IndustrySolution');
    }
}