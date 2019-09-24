<?php
# @Date:   2019-09-17T15:55:29+01:00
# @Last modified time: 2019-09-24T15:09:15+01:00




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
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>This is about page</h1>';
});

Route::get('/maeriel', function () {
    return view('maeriel');
});

Route::get('/hello', 'HelloController@hello');
