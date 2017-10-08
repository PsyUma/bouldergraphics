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

// Routes only visible in debug and dev mode
if (env('APP_DEBUG') === true && in_array(env('APP_ENV'), ['local','dev','development'])) {

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

if (!in_array(env('APP_ENV'), ['production'])) {

    Route::get('/welcome', function () {
        return view('welcome');
    });
}

Route::get('/', function () {
    return view('home');
});

Route::get('/learn', function () {
    return view('learn');
});

Route::get('/gallery', ['uses' => 'GalleryController@getGalleryView', 'as' => 'gallery']);

Route::get('/about-us', function () {
    return view('about-us');
});
