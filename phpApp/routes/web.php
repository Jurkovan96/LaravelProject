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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/quiz', 'PostController@index')->middleware('auth');


Route::post('/store',
    [
        'uses' => 'PostController@createPost',
    ]
);

Route::get('/error', 'PostController@getError');

@Route::get('/chart', 'PostController@getThePostStats');

