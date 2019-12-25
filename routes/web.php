<?php

use Spatie\Sitemap\SitemapGenerator;

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

Route::group(['namespace' => 'Web','middleware' => 'web'], function () {
  Route::get('/', 'MasterController@index')->name('index');
  Route::get('projects', 'MasterController@projects')->name('projects');
  Route::get('terms', 'MasterController@terms')->name('terms');
  Route::get('privacy', 'MasterController@privacy')->name('privacy');
  Route::get('workshop/{workshop}', 'WorkshopController@show')->name('workshop.show');

  Route::get('sitemap', function () {
    SitemapGenerator::create(config('app.url'))->writeToFile('sitemap.xml');

    return view('web.sitemap');
  });
});

Auth::routes(['verify' => true]);

// Route::get('dashboard', 'HomeController@index')->name('home');

// Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('category', 'CategoryController', ['except' => ['show']]);
// 	Route::resource('tag', 'TagController', ['except' => ['show']]);
// 	Route::resource('item', 'ItemController', ['except' => ['show']]);
// 	Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
// 	Route::resource('user', 'UserController', ['except' => ['show']]);

// 	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
// 	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
// 	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
// });


