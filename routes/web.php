<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    'as' => 'home',
    'uses' => 'StaticController@index'
]);
