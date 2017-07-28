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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{username}', 'ProfileController@show');


Route::group(['middleware' => 'auth'], function (){
    Route::get('/{username}/following', 'ProfileController@following')->name('following');
    Route::post('/follows', 'UserController@follows');
    Route::post('/unfollows', 'UserController@unfollows');
});
Route::get('/{username}', 'ProfileController@show')->name('profile');
Route::get('/{username}/followers', 'ProfileController@followers')->name('followers');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', 'TweetsController@index');
    Route::get('/tweets/create', 'TweetsController@create');
    Route::post('/tweets', 'TweetsController@store');
    Route::get('/tweets/{tweet}', 'TweetsController@show');
    Route::delete('/tweets/{tweet}', 'TweetsController@destroy');
});
Route::resource('photos', 'PhotoController');
