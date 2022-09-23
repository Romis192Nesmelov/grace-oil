<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PartnerProgram extends Model
{
    protected $fillable = [
        'name_ru',
        'name_en',
        'about_program_ru',
        'about_program_en',
        'for_whom_ru',
        'for_whom_en',
        'advantages_ru',
        'advantages_en',
        'active'
    ];
}