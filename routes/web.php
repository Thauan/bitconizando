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

Route::get('/', function () {
    return view('homepage');
});

//Route::get('/api', 'ApiController@index')->name('api');
//Route::post('register', 'Auth\RegisterController@register')->name('register');
//Route::post('login', 'Auth\LoginController@login')->name('login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Route::get('login', 'Auth\LoginController@getLogin')->name('login');

//Route::post('login', 'PassportController@login');
//Route::post('register', 'PassportController@register');
//Route::get('login', 'PassportController@login')->name('login');
//Route::get('register', 'PassportController@register')->name('register');
 
//Route::middleware('auth:api')->group(function () {
//    Route::get('/home', 'HomeController@index')->name('home');
//});



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'api', 'auth:api'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});