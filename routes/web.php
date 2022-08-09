<?php

use Illuminate\Support\Facades\Route;

//Route::auth();

Route::get('/', 'StaticController@index');
Route::get('/change-lang', 'StaticController@changeLang');
Route::post('/feedback', 'FeedbackController@feedback');