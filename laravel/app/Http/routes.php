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

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{slug}', 'ArticlesController@view');
Route::post('articles/save', 'ArticlesController@store');
Route::get('articles/edit/{id}', 'ArticlesController@edit');
Route::post('articles/update/{id}', 'ArticlesController@update');
//Route::auth();

Route::resource('tags','TagsController');

Route::get('/home', 'HomeController@index');

Route::controllers([
    '/' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);