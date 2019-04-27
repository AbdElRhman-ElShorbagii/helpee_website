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
    return view('index');
});

Route::get('/helper', function () {
    return view('helper');
});

Route::resource('contactForm','ContactFormController');
Route::resource('subscribeForm','SubscribeFormController');
Route::resource('helperForm','HelperFormController');

Auth::routes();

Route::get('/helpers', 'HelperFormController@index')->name('helpers');
Route::get('/subscribers', 'SubscribeFormController@index')->name('subscribers');
Route::get('/messages', 'ContactFormController@index')->name('messages');


