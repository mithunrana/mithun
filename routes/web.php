<?php


//=========================USER SITE REQUEST START HERE ========================//
//Route::get('/', function () {return view('welcome');});
Route::get('/', 'UIHomeController@index');
Route::get('/about','AboutController@index');
/*Route::get('/contact','UserMainController@contact');
Route::get('/portfolio','UserMainController@portfolioMain');
Route::get('/service','UserMainController@serviceMain');
Route::get('/blog','UserMainController@blogMain');
Route::get('/blog-view','UserMainController@blogView');*/
//=========================USER SITE REQUEST START HERE ========================//

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
