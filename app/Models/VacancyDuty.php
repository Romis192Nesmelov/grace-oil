<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class VacancyDuty extends Model
{
    protected $fillable = ['text_ru','text_en'];

    public function vacancy()
    {
        return $this->belongsTo('App\Models\Vacancy');
    }
}