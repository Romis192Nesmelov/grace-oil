<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
//Route::auth();

Route::get('/', 'StaticController@index');
Route::get('/change-lang', 'StaticController@changeLang');
Route::post('/feedback', 'FeedbackController@feedback');

foreach (Menu::where('active',1)->get() as $menu) {
    if ($menu->href && $menu->manager) {
        Route::get('/'.$menu->slug, $menu->manager->controller.'@'.$menu->manager->method);
    }
    
    if (count($menu->subMenu)) {
        foreach ($menu->subMenu as $subMenu) {
            if ($subMenu->manager) {
                Route::get('/'.$subMenu->slug, $subMenu->manager->controller.'@'.$subMenu->manager->method);
            }
        }
    }
}