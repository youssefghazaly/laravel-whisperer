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

//Route::get('/', function () {
//  return view('/components/app');
//});



Auth::routes();

Route::get('/', function () {
  return view('/components/master');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', function () {
  return view('/welcome');
});
Route::post('/tweetsc', 'App\Http\Controllers\TweetController@store');
Route::get('profiles/edit/{user:username}','App\Http\Controllers\ProfileController@edit')->name('edit');

Route::patch('profiles/show/{user:username}', 'App\Http\Controllers\FollowController@update')->name('update');
Route::post('profiles/show/{user:username}', 'App\Http\Controllers\FollowController@store');

Route::get('/profiles/{user:username}', 'App\Http\Controllers\ProfileController@show')->name('profile');

Route::get('/explore', 'App\Http\Controllers\ExploreController@index')->name('explore');

Route::post('home/{tweet}/like', 'App\Http\Controllers\TweetLikesController@store');
Route::delete('home/{tweet}/like', 'App\Http\Controllers\TweetLikesController@destroy');
Route::post('profiles/home/{tweet}/like', 'App\Http\Controllers\TweetLikesController@store');
Route::delete('profiles/home/{tweet}/like', 'App\Http\Controllers\TweetLikesController@destroy');
Route::get('logout', function () {
  Auth::logout();
  return view('/components/master');
});
