<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PagesController;
// use App\Http\Controllers\CommentsController;

// Route::get('/', 'PagesController@index')->name('home');


// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Route::post('/comment/store', 'CommentsController@store')->name('comment.add');

Route::get('/', 'PagesController@index')->name('home');
Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy-policy');
Route::get('/countries-checkboxes', 'PagesController@countries_checkboxes')->name('countries-checkboxes');
Route::post('/update-countries', 'CountryController@update_countries')->name('update-countries');

Route::get('autocomplete/countries', 'CountryController@autocomplete')->name('autocomplete-countries');