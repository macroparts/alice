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
    return view('wall');
});

Route::get('/movies', 'MovieController@index');

Route::get('/series', function () {
    return view('series');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/yourprofile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/impressum', function () {
    return view('impressum');
});