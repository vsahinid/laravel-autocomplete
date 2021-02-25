<?php

use App\Http\Controllers\CountryController;
// use App\Http\Controllers\CommentsController;

// Route::get('/', 'PagesController@index')->name('home');
// Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy-policy');

// Route::get('autocomplete/countries', 'CountryController@autocomplete')->name('autocomplete-countries');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Route::post('/comment/store', 'CommentsController@store')->name('comment.add');


Route::get('/', function () {
    return view('welcome');
});
