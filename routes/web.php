<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Models\OilType;
use App\Models\Manager;
//Route::auth();

Route::get('/', 'StaticController@index');
Route::get('/search/{slug}', 'SearchController@find');
Route::get('/change-lang', 'StaticController@changeLang');
Route::post('/feedback', 'FeedbackController@feedback');
Route::post('/become_dealer', 'FeedbackController@becomeDealer');
Route::post('/submit_application', 'FeedbackController@submitApplication');
Route::post('/grace_test_request', 'FeedbackController@graceTestRequest');
Route::post('/partner', 'FeedbackController@toBeAPartner');
Route::post('/program_application', 'FeedbackController@programApplication');
Route::post('/resume', 'FeedbackController@resume');
Route::post('/offer', 'FeedbackController@offer');

foreach (Menu::where('active',1)->get() as $menu) {
    if ($menu->href && $menu->manager) {
        Route::get('/'.$menu->slug.(isset($menu->use_slug) && $menu->use_slug ? '/{slug?}' : '').(isset($menu->use_sub_slug) && $menu->use_sub_slug ? '/{sub_slug?}' : ''), $menu->manager->controller.'@'.$menu->manager->method);
    }
    
    if (count($menu->subMenu)) {
        foreach ($menu->subMenu as $subMenu) {
            if ($subMenu->manager) {
                Route::get('/'.$subMenu->slug.(isset($subMenu->slug_model) && $subMenu->slug_model ? '/{slug?}' : ''), $subMenu->manager->controller.'@'.$subMenu->manager->method);
            }
        }
    } elseif ($menu->id == 3) {
        $manager = Manager::find(3);
        foreach (OilType::where('active',1)->get() as $oilType) {
            Route::get('/'.$menu->slug.'/{slug?}/{sub_slug?}', $manager->controller.'@'.$manager->method);
        }
    }
}

Route::get('/how-to-become-a-dealer', 'StaticController@howToBecomeADealer');
Route::get('/terms-of-use', 'StaticController@termsOfUse');