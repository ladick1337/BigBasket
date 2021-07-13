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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', 'BigBasketController@index' )->name('index');


Route::get('/ebay', 'BigBasketController@ebay' )->name('ebay');

Route::get('/amazon', 'BigBasketController@amazon' )->name('amazon');

Route::get('/tarif', 'BigBasketController@tarif' )->name('tarif');

Route::get('/mf', 'BigBasketController@mf' )->name('mf');

Route::get('/shops', 'BigBasketController@shops' )->name('shops');

Route::get('/contacts', 'BigBasketController@contacts' )->name('contacts');

Route::get('/calculate', 'BigBasketController@calculate' )->name('calculate');

Route::get('/faq', 'BigBasketController@faq' )->name('faq');

Route::get('/open-shop', 'BigBasketController@openShop' )->name('openShop');

Route::get('/send-mail', 'BigBasketController@sendMail')->name('sendMail');