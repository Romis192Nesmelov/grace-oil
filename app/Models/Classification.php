<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable = ['name_ru','name_en','text_ru','text_en','active'];
}