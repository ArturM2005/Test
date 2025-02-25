<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/rates/{currency?}', 'RateController@rates')->name('rates');
Route::post('/rates/{currency_from}?{currency_to}?{value}', 'RateController@convert')->name('convert');
