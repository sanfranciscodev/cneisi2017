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
)->middleware('can:view-speakers');

Route::get(
    '/conference',
    ['as' => 'conference.index', 'uses' => 'ConferenceController@index']
);

Route::get(
    '/speaker/create',
    ['as' => 'speaker.create', 'uses' => 'SpeakerController@create']
);

Route::post(
    '/speaker',
    ['as' => 'speaker.store', 'uses' => 'SpeakerController@store']
);

Route::get(
    '/speaker/{speaker}',
    ['as' => 'speaker.show', 'uses' => 'SpeakerController@show']
);

Route::get(
    '/speaker/{speaker}/edit',
    ['as' => 'speaker.edit', 'uses' => 'SpeakerController@edit']
);

Route::put(
    '/speaker/{speaker}',
    ['as' => 'speaker.update', 'uses' => 'SpeakerController@update']
);

Route::delete(
    '/speaker/{speaker}',
    ['as' => 'speaker.destroy', 'uses' => 'SpeakerController@destroy']
);

//Route::get('/speakers/{slug}', 'SpeakerController@show');
//Route::get('/conferences/{slug}', 'ConferenceController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');