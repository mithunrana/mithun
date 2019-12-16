<?php

use Illuminate\Http\Request;
//=========================USER SITE REQUEST START HERE ========================//
//Route::get('/', function () {return view('welcome');});
Route::get('/', 'UIHomeController@index');
Route::get('/about','AboutController@index');
Route::get('/contact','ContactController@index');
Route::get('/portfolio','PortfolioController@index');
Route::get('/service','ServiceController@index');
Route::get('/blog','BlogController@index');
Route::get('/blog-view','BlogController@blogView');
//=========================USER SITE REQUEST START HERE ========================//





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');





//=========================ADMIN SITE REQUEST START HERE ========================//
Route::get('/blog-add','BlogController@create');
Route::get('/getallimage','ImageUploadController@imagelist');
Route::post('/formSubmit','ImageUploadController@imageUpload');

//=========================ADMIN SITE REQUEST END HERE ==========================//