<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class HistoryPoint extends Model
{
    protected $fillable = ['image','head_ru','text_ru','head_en','text_en','active'];
}