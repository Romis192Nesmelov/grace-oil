<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    protected $fillable = ['preview','full','text_ru','text_en','active'];

    //    public function menu()
//    {
//        return $this->belongsTo('App\Models\Menu');
//    }
}