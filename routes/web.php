<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

/* Sidebar Controllers */
Route::get('/', ['as' => 'workout', 'uses' => 'WorkoutController@index']);
Route::get('/calendar', ['as' => 'calendar', 'uses' => 'CalendarController@index']);

/* Logout User */
Route::get('/logout', 'Auth\LoginController@logout');

/* Update User */
Route::patch('/update', 'UserController@update');
