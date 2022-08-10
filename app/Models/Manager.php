<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = ['controller','method'];

    public function menu()
    {
        return $this->hasMany('App\Models\Menu');
    }

    public function subMenu()
    {
        return $this->hasMany('App\Models\SubMenu');
    }
}