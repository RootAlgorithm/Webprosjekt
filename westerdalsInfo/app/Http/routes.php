<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('main');
});*/

Route::get('/', 'PageController@getMain');

//Route::auth();

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::resource('posts', 'PostController');

Route::get('post/{niceurl}', ['uses' => 'PostController@getSingle', 'as' => 'posts.single']);

Route::get('nearby', 'PageController@getNearby');

Route::get('campus', 'PageController@getCampus');

Route::get('discount', 'PageController@getDiscount');

Route::resource('users', 'UserController', ['except' => ['create', 'store', 'show', 'destroy']]);

Route::resource('tags', 'TagController', ['except' => ['create']]);

Route::resource('userinfo', 'UserInfo', ['except' => ['create', 'show', 'destroy']]);