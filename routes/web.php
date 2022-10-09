<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Models\OilType;
use App\Models\Manager;
use Illuminate\Support\Facades\Cache;
//Route::auth();

Route::get('/search/{slug}', 'SearchController@find');
Route::get('/', 'StaticController@index')->name('home');
Route::get('/change-lang', 'StaticController@changeLang')->name('change_lang');
Route::post('/feedback', 'FeedbackController@feedback')->name('feedback');
Route::post('/become_dealer', 'FeedbackController@becomeDealer');
Route::post('/submit_application', 'FeedbackController@submitApplication')->name('submit_application');
Route::post('/grace_test_request', 'FeedbackController@graceTestRequest')->name('grace_test_request');
Route::post('/partner', 'FeedbackController@toBeAPartner')->name('partner');
Route::post('/resume', 'FeedbackController@resume')->name('resume');
Route::post('/offer', 'FeedbackController@offer')->name('offer');

Route::get('/temp', 'SearchController@temp');

foreach (Cache::remember('menu', 60*60*24*365, function () {
    return Menu::where('active',1)->with('subMenu')->get();
}) as $menu) {
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
        $manager = Cache::remember('manager_catalogue', 60*60*24*365, function () {
            return Manager::find(3);
        });
        foreach (OilType::where('active',1)->get() as $oilType) {
            Route::get('/'.$menu->slug.'/{slug?}/{sub_slug?}', $manager->controller.'@'.$manager->method);
        }
    }
}

Route::get('/how-to-become-a-dealer', 'StaticController@howToBecomeADealer');
Route::get('/terms-of-use', 'StaticController@termsOfUse');

Route::get('/processing_catalogue', 'StaticController@processingCatalogue');