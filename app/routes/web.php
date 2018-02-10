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

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/series', function () {
    return view('series');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/yourprofile', function () {
    return view('profile');
});