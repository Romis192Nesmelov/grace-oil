<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AboutLubricant extends Model
{
    protected $fillable = ['image','head_ru','head_en','text_ru','text_en','active'];
}