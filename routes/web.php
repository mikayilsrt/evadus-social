<?php

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
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', "HomeController@index");
    
    Route::get('/discover', function () {
        return view('discover.index');
    });

    Route::get("/profile/settings", "SettingsController@index")->name('profile.settings');

    Route::post("/profile/settings", "SettingsController@update")->name('profile.update');
    
    Route::get('/search/{tag}', function ($tag) {
        return view('search.index')->with("tag", $tag);
    });

    Route::post("/like", "LikeController@like");

    Route::post("/follow", "FollowerController@follow")->name("follow");

    Route::get("/random-user", "UserController@randomUser");
});

Route::get('/profile/{name}', "UserController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
