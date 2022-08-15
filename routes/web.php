<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Models\SubMenu;
//Route::auth();

Route::get('/', 'StaticController@index');
Route::get('/change-lang', 'StaticController@changeLang');
Route::post('/feedback', 'FeedbackController@feedback');
Route::post('/become_dealer', 'FeedbackController@becomeDealer');
Route::post('/grace_test_request', 'FeedbackController@graceTestRequest');
Route::post('/partner', 'FeedbackController@toBeAPartner');
Route::post('/program_application', 'FeedbackController@programApplication');

foreach (Menu::where('active',1)->get() as $menu) {
    if ($menu->href && $menu->manager) {
        Route::get('/'.$menu->slug.(isset($menu->use_slug) && $menu->use_slug ? '/{slug?}' : ''), $menu->manager->controller.'@'.$menu->manager->method);
    }
    
    if (count($menu->subMenu)) {
        foreach ($menu->subMenu as $subMenu) {
            if ($subMenu->manager) {
                Route::get('/'.$subMenu->slug.(isset($subMenu->slug_model) && $subMenu->slug_model ? '/{slug?}' : ''), $subMenu->manager->controller.'@'.$subMenu->manager->method);
            }
        }
    }
}

Route::get('/how-to-become-a-dealer', 'StaticController@howToBecomeADealer');
Route::get('/terms-of-use', 'StaticController@termsOfUse');