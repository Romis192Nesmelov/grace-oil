<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OilType extends Model
{
    protected $fillable = ['name_ru', 'name_en', 'active'];
}