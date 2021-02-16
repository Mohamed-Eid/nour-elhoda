<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\HomeController@index')->name('frontend.home');
Route::get('/about_us', function(){
    return view('frontend.about');
})->name('frontend.about_us');

Route::resource('projects', 'Frontend\ProjectController')->only(['index', 'show']);
Route::get('get_more_projects','Frontend\ProjectController@more')->name('more_projects');

//AdminPanel Routes
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::middleware(['auth'])->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::get('/settings', function () {
            return view('dashboard.settings.index');
        });
    
        Route::resource('users', 'Dashboard\UserController');
        Route::resource('projects', 'Dashboard\ProjectController');
        Route::resource('articles', 'Dashboard\ArticleController');
        Route::resource('investigations', 'Dashboard\InvestigationController');
        Route::resource('videos', 'Dashboard\VideoController');
        Route::resource('products', 'Dashboard\ProductController');
        Route::resource('heighlights', 'Dashboard\HeighlightController');
        Route::resource('integrations', 'Dashboard\IntegrationController');
        Route::resource('company_heighlights', 'Dashboard\CompanyHeighlightController');
        Route::resource('sliders', 'Dashboard\SliderController');

        Route::group(['prefix' => 'settings'], function (){
            Route::get('contact','Dashboard\SettingController@contact')->name('settings.contact');
            Route::get('about','Dashboard\SettingController@about')->name('settings.about');
            Route::get('home','Dashboard\SettingController@home')->name('settings.home');
            Route::put('update','Dashboard\SettingController@update')->name('settings.update');
        });
    });
});



// Route::get('/home', 'HomeController@index')->name('home');
