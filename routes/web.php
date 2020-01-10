<?php

use Illuminate\Http\Request;
//=========================USER SITE REQUEST START HERE ========================//
//Route::get('/', function () {return view('welcome');});
Route::get('/', 'UIHomeController@index');
Route::get('/about','AboutController@index');
Route::get('/contact','ContactController@index');
Route::get('/portfolio','PortfolioController@index');
Route::get('/portfolio/{url}','PortfolioController@singlePortfolio');
Route::get('/service','ServiceController@index');
Route::get('/service/{url}','ServiceController@singleService');
Route::get('/tutorials','BlogController@index');
//=========================USER SITE REQUEST START HERE ========================//


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//=========================ADMIN SITE REQUEST START HERE ========================//

Route::get('/admin-panel','AdminController@index');

Route::get('/category','CategoryController@index');
Route::post('/categorysave','CategoryController@store');
Route::get('/getall-category','CategoryController@getAll');
Route::post('/update-category','CategoryController@categoryUpdate');
Route::post('/delete-category','CategoryController@categoryDelete');


Route::get('/portfolio-category','PortfolioController@portfolioCategory');
Route::post('/portfolio-category-save','PortfolioController@portfolioCategoryStore');
Route::get('/getall-portfolio-category','PortfolioController@getAllCategory');
Route::post('/update-portfolio-category','PortfolioController@portfolioCategoryUpdate');


Route::get('/portfolio-manage','PortfolioController@portfolioManage');
Route::get('/portfolio-add','PortfolioController@create');
Route::get('/portfolio-edit/{id}','PortfolioController@portfolioEdit');
Route::post('/portfolio-store','PortfolioController@store');
Route::post('/portfolio-update/{id}','PortfolioController@portfolioUpdate');
Route::get('/portfolio-delete/{id}','PortfolioController@portfolioDelete');
Route::post('/portfolio-category-delete/','PortfolioController@portfolioCategoryDelete');
Route::get('/portfolio-active-deactive/{id}/{postid}','PortfolioController@portfolioActiveDeactive');



Route::get('/manage-expertness','ExpertnessWithQualification@manageExpertness');
Route::get('/add-expertness','ExpertnessWithQualification@addExpertness');
Route::post('/store-expertness','ExpertnessWithQualification@storeExpertness');
Route::get('/edit-expertness/{id}','ExpertnessWithQualification@editExpertness');
Route::post('/update-expertness/{id}','ExpertnessWithQualification@updateExpertness');
Route::get('/delete-expertness/{id}','ExpertnessWithQualification@deleteExpertness');
Route::get('/expertness-active-deactive/{id}/{postid}','ExpertnessWithQualification@activeDeactiveExpertness');




Route::get('/manage-qualification','ExpertnessWithQualification@manageQualification');
Route::get('/add-qualification','ExpertnessWithQualification@addQualification');
Route::post('/store-qualification','ExpertnessWithQualification@storeQualification');
Route::get('/edit-qualification/{id}','ExpertnessWithQualification@editQualification');
Route::post('/update-qualification/{id}','ExpertnessWithQualification@updateQualification');
Route::get('/delete-qualification/{id}','ExpertnessWithQualification@deleteQualification');
Route::get('/qualification-active-deactive/{id}/{postid}','ExpertnessWithQualification@activeDeactiveQualification');



Route::get('/manage-comment','CommentController@index');
Route::get('/comment-add','CommentController@add');
Route::post('/comment-store','CommentController@store');
Route::get('/comment-edit/{id}','CommentController@edit');
Route::post('/comment-update/{id}','CommentController@update');
Route::get('/comment-delete/{id}','CommentController@delete');
Route::get('/comment-active-deactive/{id}/{postid}','CommentController@activeDeactiveComment');



Route::get('/profile-update','AboutController@profile');
Route::post('/profile-update','AboutController@profileUpdate');
Route::post('/profile-cvupdate','AboutController@cvUpdate');

Route::get('/service-add','ServiceController@serviceCreate');
Route::post('/service-store','ServiceController@serviceStore');
Route::get('/service-manage','ServiceController@serviceManage');
Route::get('/service-edit/{id}','ServiceController@edit');
Route::post('/service-update/{id}','ServiceController@update');
Route::get('/service-delete/{id}','ServiceController@delete');
Route::get('/service-active-deactive/{status}/{postid}','ServiceController@activeDeactive');


Route::get('/getallimage','ImageUploadController@imagelist');
Route::post('/formSubmit','ImageUploadController@imageUpload');

Route::get('/blog-manage','BlogController@manage');
Route::get('/blog-add','BlogController@create');
Route::post('/blog-add','BlogController@store');
Route::get('/blog-edit/{id}','BlogController@edit');
Route::post('/blog-update/{id}','BlogController@update');
Route::get('/blog-delete/{id}','BlogController@delete');
Route::get('/blog-active-deactive/{id}/{postid}','BlogController@blogActiveDeactive');
Route::get('/{url}','BlogController@blogByUrl');

//=========================ADMIN SITE REQUEST END HERE ==========================//