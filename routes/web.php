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
    
    Route::get('/search/{tag}', function ($tag) {
        return view('search.index')->with("tag", $tag);
    });
});

Route::get('/profile/{name}', function ($name) {
    return view('profile.index')->with("name", $name);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
