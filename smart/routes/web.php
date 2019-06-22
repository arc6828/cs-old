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
    return view('welcome');
});

Route::get('/publication/test', function(){
  return view('publication/test');
});
Route::resource('/publication', 'PublicationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('event', 'EventController');
