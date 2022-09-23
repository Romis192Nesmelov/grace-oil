<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    protected $fillable = ['link','description_ru','description_en','active'];

    public function aboutProducts()
    {
        return $this->hasMany('App\Models\AboutProduct');
    }
}