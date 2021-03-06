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

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Route::resource('post', 'PostController');

//tutorial0710
Route::get('tutorial0710', 'Tutorial0710Controller@formview');
Route::post('tutorial0710', 'Tutorial0710Controller@processform')->name('tutorial0710.processform');

Route::get('tutorial0710/guru99', 'Tutorial0710Controller@formviewguru99');
Route::post('tutorial0710/guru99process', 'Tutorial0710Controller@processformguru99')->name('tutorial0710.processformguru99');
