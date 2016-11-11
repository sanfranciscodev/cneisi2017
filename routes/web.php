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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/speaker',
    ['as' => 'speaker.index', 'uses' => 'SpeakerController@index']
);

Route::get(
    '/conference',
    ['as' => 'conference.index', 'uses' => 'ConferenceController@index']
);

Route::get(
    '/profile',
    ['as' => 'profile.edit', 'uses' => 'UserProfileController@edit']
);

Route::put(
    '/profile/{profile}',
    ['as' => 'profile.update', 'uses' => 'UserProfileController@update']
);

//Route::get('/speakers/{slug}', 'SpeakerController@show');
//Route::get('/conferences/{slug}', 'ConferenceController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');
