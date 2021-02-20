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

Route::get('change_language/{locale}',function($locale){
    
    app()->setLocale($locale);
    
    session()->put('locale',$locale);

    return redirect()->back();

})->name('change_language');


Route::middleware(['change_lang'])->group(function () {

    Route::get('/', 'Frontend\HomeController@index')->name('frontend.home');
    Route::get('/about_us', function(){
        return view('frontend.about');
    })->name('frontend.about_us');

    Route::name('frontend.')->group(function(){
        Route::resource('projects', 'Frontend\ProjectController')->only(['index', 'show']);
        Route::resource('products', 'Frontend\ProductController')->only(['index', 'show']);
        Route::resource('articles', 'Frontend\ArticleController')->only(['index', 'show']);
        Route::resource('gallaries', 'Frontend\GallaryController')->only(['index', 'show']);
        Route::resource('contact', 'Frontend\ContactController')->only(['index' , 'store']);
        Route::get('videos', 'Frontend\VideoController')->name('videos.index');
    });

    Route::get('get_more_projects','Frontend\ProjectController@more')->name('more_projects');
    Route::get('get_more_products','Frontend\ProductController@more')->name('more_products');
    Route::get('get_more_articles','Frontend\ArticleController@more')->name('more_articles');
    
});


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
        Route::resource('gallaries', 'Dashboard\GallaryController');
        Route::resource('images', 'Dashboard\ImageController');

        Route::group(['prefix' => 'settings'], function (){
            Route::get('contact','Dashboard\SettingController@contact')->name('settings.contact');
            Route::get('about','Dashboard\SettingController@about')->name('settings.about');
            Route::get('home','Dashboard\SettingController@home')->name('settings.home');
            Route::get('pages','Dashboard\SettingController@pages')->name('settings.pages');
            Route::get('general','Dashboard\SettingController@general')->name('settings.general');
            Route::put('update','Dashboard\SettingController@update')->name('settings.update');
        });
    });
});



// Route::get('/home', 'HomeController@index')->name('home');
