<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Cache;
//Route::auth();

Route::get('/search/{slug}', 'SearchController@find');
Route::get('/', 'StaticController@index')->name('home');
Route::get('/change-lang', 'StaticController@changeLang')->name('change_lang');
Route::post('/feedback', 'FeedbackController@feedback')->name('feedback');
Route::post('/submit_application', 'FeedbackController@submitApplication')->name('submit_application');
Route::post('/grace_test_request', 'FeedbackController@graceTestRequest')->name('grace_test_request');
Route::post('/partner', 'FeedbackController@toBeAPartner')->name('partner');
Route::post('/resume', 'FeedbackController@resume')->name('resume');
Route::post('/offer', 'FeedbackController@offer')->name('offer');

//Route::get('/parser', 'ParserController@marketplaces');
//Cache::flush();
//foreach (Cache::remember('menu', 60*60*24*365, function () {
//    return Menu::where('active',1)->with('subMenu')->get();
//}) as $menu) {
foreach (Menu::where('active',1)->with('subMenu')->get() as $menu) {

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
        Route::any('/'.$menu->slug.'/{slug?}/{sub_slug?}', $menu->manager->controller.'@'.$menu->manager->method);
    }
}
Route::get('/cooperation1', 'StaticController@cooperation1')->name('cooperation1');
Route::get('/terms-of-use', 'StaticController@termsOfUse')->name('terms_of_use');
Route::get('/vacancies', 'StaticController@vacancies')->name('vacancies');

Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::post('/login', 'LoginController@login')->name('enter');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {

    Route::get('/', 'Admin\AdminViewController@home')->name('home');

    Route::get('/users/{slug?}', 'Admin\AdminViewController@users')->name('users');
    Route::post('/edit-user', 'Admin\AdminEditController@editUser')->name('edit_user');
    Route::post('/delete-user', 'Admin\AdminApiController@deleteUser')->name('delete_user');

    Route::get('/menus', 'Admin\AdminViewController@menus')->name('menus');
    Route::post('/edit-menu', 'Admin\AdminEditController@editMenu')->name('edit_menu');

    Route::get('/sub-menu', 'Admin\AdminViewController@subMenu')->name('sub_menu');
    Route::post('/edit-sub-menu', 'Admin\AdminEditController@editSubmenu')->name('edit_sub_menu');

    Route::get('/oil-types', 'Admin\AdminViewController@oilTypes')->name('oil_types');
    Route::post('/edit-oil-type', 'Admin\AdminEditController@editOilType')->name('edit_oil_type');
    Route::post('/delete-oil-type', 'Admin\AdminApiController@deleteOilType')->name('delete_oil_type');

    Route::get('/oils/{slug?}', 'Admin\AdminViewController@oils')->name('oils');
    Route::post('/edit-oil', 'Admin\AdminEditController@editOil')->name('edit_oil');
    Route::post('/delete-oil', 'Admin\AdminApiController@deleteOil')->name('delete_oil');

    Route::get('/areas/{slug?}', 'Admin\AdminViewController@areas')->name('areas');
    Route::post('/edit-area', 'Admin\AdminEditController@editArea')->name('edit_area');
    Route::post('/delete-area', 'Admin\AdminApiController@deleteArea')->name('delete_area');

    Route::get('/dealers/{slug?}', 'Admin\AdminViewController@dealers')->name('dealers');
    Route::post('/edit-dealer', 'Admin\AdminEditController@editDealer')->name('edit_dealer');
    Route::post('/delete-dealer', 'Admin\AdminApiController@deleteDealer')->name('delete_dealer');

    Route::get('/news/{slug?}', 'Admin\AdminViewController@news')->name('news');
    Route::post('/edit-news', 'Admin\AdminEditController@editNews')->name('edit_news');
    Route::post('/delete-news', 'Admin\AdminApiController@deleteNews')->name('delete_news');
});