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

Route::get('/category','CategoryController@index');
Route::post('/categorysave','CategoryController@store');
Route::get('/getall-category','CategoryController@getAll');
Route::post('/update-category','CategoryController@categoryUpdate');


Route::get('/portfolio-category','PortfolioController@portfolioCategory');
Route::post('/portfolio-category-save','PortfolioController@portfolioCategoryStore');
Route::get('/getall-portfolio-category','PortfolioController@getAllCategory');
Route::post('/update-portfolio-category','PortfolioController@portfolioCategoryUpdate');


Route::get('/blog-manage','BlogController@manage');
Route::get('/blog-add','BlogController@create');
Route::post('/blog-add','BlogController@store');
Route::get('/blog-edit/{id}','BlogController@edit');
Route::post('/blog-update/{id}','BlogController@update');


Route::get('/portfolio-manage','PortfolioController@portfolioManage');
Route::get('/portfolio-add','PortfolioController@create');
Route::get('/portfolio-edit/{id}','PortfolioController@portfolioEdit');
Route::post('/portfolio-store','PortfolioController@store');
Route::post('/portfolio-update/{id}','PortfolioController@portfolioUpdate');


Route::get('/manage-expertness','ExpertnessWithQualification@manageExpertness');
Route::get('/add-expertness','ExpertnessWithQualification@addExpertness');
Route::post('/store-expertness','ExpertnessWithQualification@storeExpertness');
Route::get('/edit-expertness/{id}','ExpertnessWithQualification@editExpertness');
Route::post('/update-expertness/{id}','ExpertnessWithQualification@updateExpertness');



Route::get('/manage-qualification','ExpertnessWithQualification@manageQualification');
Route::get('/add-qualification','ExpertnessWithQualification@addQualification');
Route::post('/store-qualification','ExpertnessWithQualification@storeQualification');
Route::get('/edit-qualification/{id}','ExpertnessWithQualification@editQualification');
Route::post('/update-qualification/{id}','ExpertnessWithQualification@updateQualification');


Route::get('/manage-comment','CommentController@index');
Route::get('/comment-add','CommentController@add');
Route::post('/comment-store','CommentController@store');
Route::get('/comment-edit/{id}','CommentController@edit');
Route::post('/comment-update/{id}','CommentController@update');
Route::get('/comment-delete/{id}','CommentController@delete');


Route::get('/profile-update','AboutController@profile');
Route::post('/profile-update','AboutController@profileUpdate');


Route::get('/service-add','ServiceController@serviceCreate');
Route::post('/service-store','ServiceController@serviceStore');
Route::get('/service-manage','ServiceController@serviceManage');
Route::get('/service-edit/{id}','ServiceController@edit');
Route::post('/service-update/{id}','ServiceController@update');


Route::get('/getallimage','ImageUploadController@imagelist');
Route::post('/formSubmit','ImageUploadController@imageUpload');
//=========================ADMIN SITE REQUEST END HERE ==========================//