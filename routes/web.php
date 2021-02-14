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

Route::get('/', function () {
    return view('welcome');
});


Route::get('test',function(){
    $videos = \App\Video::simplePaginate(1);
    return view('dashboard.test',compact('videos'));
})->name('test');

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
    });
});



// Route::get('/home', 'HomeController@index')->name('home');
