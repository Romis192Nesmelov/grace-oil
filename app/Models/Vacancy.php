<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['name_ru','name_en','skills','employment_ru','employment_en','active'];
    
    public function duties()
    {
        return $this->hasMany('App\Models\VacancyDuty');
    }

    public function requirements()
    {
        return $this->hasMany('App\Models\VacancyRequirement');
    }

    public function terms()
    {
        return $this->hasMany('App\Models\VacancyTerm');
    }
}