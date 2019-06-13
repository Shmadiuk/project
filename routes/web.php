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

//Route::get('/', function () {return view('layouts/main');});
//Route::get('/users', function () {return view('users');})->name('users');
//
//Route::get('/offers', function () {return view('offers/offers');})->name('offers');
//Route::get('/offers/add', function () {return view('offers/offers-add');})->name('offers-add');
//Route::get('/offers/edit', function () {return view('offers/offers-edit');})->name('offers-edit');

Route::get('/', 'IndexController@main')->name('main');
Route::get('/offers/', 'OfferController@offer')->name('offers');
Route::get('/offers/edit', 'OfferController@edit')->name('offers-edit');
Route::get('users/', 'UsersController@user')->name('users');
Route::get('/offers/add', 'OfferController@add')->name('offers-add');
Route::post('/offers/add', 'OfferController@submit');
Route::get('/admin', 'AdminController@main')->name('admin');
Route::post('/admin', 'AdminController@post');
//Route::get('/offers/edit/{offer}', 'OfferController@edit')->name('offers-edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
