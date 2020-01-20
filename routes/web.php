<?php

use Illuminate\Http\Request;
//=========================USER SITE REQUEST START HERE ========================//
//Route::get('/', function () {return view('welcome');});
Route::get('/', 'UIHomeController@index');
Route::get('/about-mithun-rana','AboutController@index');
Route::get('/contact-mithun-rana','ContactController@index');
Route::get('/portfolio','PortfolioController@index');
Route::get('/portfolio/{url}','PortfolioController@singlePortfolio');
Route::get('/service','ServiceController@index');
Route::get('/service/{url}','ServiceController@singleService');
Route::get('/bangla-video-tutorial','BlogController@index');
Route::get('/tutorial/{url}','BlogController@blogByUrl');
Route::get('/mithunrana-image-gallery','GalleryController@index');
Route::get('/admin-login','UIHomeController@login');
Auth::routes(['register' => false]);
Route::get('login', 'UIHomeController@login')->name('login');
//=========================USER SITE REQUEST END HERE ========================//

Route::get('get-ip-details', function () {
    $ip = '27.147.169.66';
    $data = \Location::get($ip);
    dd($data);
});


//=========================ADMIN SITE REQUEST START HERE ========================//
Route::get('/admin-panel','AdminController@index');
Route::get('/category','CategoryController@index')->middleware(['auth']);
Route::post('/categorysave','CategoryController@store')->middleware(['auth']);
Route::get('/getall-category','CategoryController@getAll')->middleware(['auth']);
Route::post('/update-category','CategoryController@categoryUpdate')->middleware(['auth']);
Route::post('/delete-category','CategoryController@categoryDelete')->middleware(['auth']);



Route::get('/blog-manage','BlogController@manage')->middleware(['auth']);
Route::get('/blog-add','BlogController@create')->middleware(['auth']);
Route::post('/blog-add','BlogController@store')->middleware(['auth']);
Route::get('/blog-edit/{id}','BlogController@edit')->middleware(['auth']);
Route::post('/blog-update/{id}','BlogController@update')->middleware(['auth']);
Route::get('/blog-delete/{id}','BlogController@delete')->middleware(['auth']);
Route::get('/blog-active-deactive/{id}/{postid}','BlogController@blogActiveDeactive')->middleware(['auth']);

Route::get('/portfolio-category','PortfolioController@portfolioCategory')->middleware(['auth']);
Route::post('/portfolio-category-save','PortfolioController@portfolioCategoryStore')->middleware(['auth']);
Route::get('/getall-portfolio-category','PortfolioController@getAllCategory')->middleware(['auth']);
Route::post('/update-portfolio-category','PortfolioController@portfolioCategoryUpdate')->middleware(['auth']);


Route::get('/portfolio-manage','PortfolioController@portfolioManage')->middleware(['auth']);
Route::get('/portfolio-add','PortfolioController@create')->middleware(['auth']);
Route::get('/portfolio-edit/{id}','PortfolioController@portfolioEdit')->middleware(['auth']);
Route::post('/portfolio-store','PortfolioController@store')->middleware(['auth']);
Route::post('/portfolio-update/{id}','PortfolioController@portfolioUpdate')->middleware(['auth']);
Route::get('/portfolio-delete/{id}','PortfolioController@portfolioDelete')->middleware(['auth']);
Route::post('/portfolio-category-delete/','PortfolioController@portfolioCategoryDelete')->middleware(['auth']);
Route::get('/portfolio-active-deactive/{id}/{postid}','PortfolioController@portfolioActiveDeactive')->middleware(['auth']);



Route::get('/manage-expertness','ExpertnessWithQualification@manageExpertness')->middleware(['auth']);
Route::get('/add-expertness','ExpertnessWithQualification@addExpertness')->middleware(['auth']);
Route::post('/store-expertness','ExpertnessWithQualification@storeExpertness')->middleware(['auth']);
Route::get('/edit-expertness/{id}','ExpertnessWithQualification@editExpertness')->middleware(['auth']);
Route::post('/update-expertness/{id}','ExpertnessWithQualification@updateExpertness')->middleware(['auth']);
Route::get('/delete-expertness/{id}','ExpertnessWithQualification@deleteExpertness')->middleware(['auth']);
Route::get('/expertness-active-deactive/{id}/{postid}','ExpertnessWithQualification@activeDeactiveExpertness')->middleware(['auth']);




Route::get('/manage-qualification','ExpertnessWithQualification@manageQualification')->middleware(['auth']);
Route::get('/add-qualification','ExpertnessWithQualification@addQualification')->middleware(['auth']);
Route::post('/store-qualification','ExpertnessWithQualification@storeQualification')->middleware(['auth']);
Route::get('/edit-qualification/{id}','ExpertnessWithQualification@editQualification')->middleware(['auth']);
Route::post('/update-qualification/{id}','ExpertnessWithQualification@updateQualification')->middleware(['auth']);
Route::get('/delete-qualification/{id}','ExpertnessWithQualification@deleteQualification')->middleware(['auth']);
Route::get('/qualification-active-deactive/{id}/{postid}','ExpertnessWithQualification@activeDeactiveQualification')->middleware(['auth']);



Route::get('/manage-comment','CommentController@index')->middleware(['auth']);
Route::get('/comment-add','CommentController@add')->middleware(['auth']);
Route::post('/comment-store','CommentController@store')->middleware(['auth']);
Route::get('/comment-edit/{id}','CommentController@edit')->middleware(['auth']);
Route::post('/comment-update/{id}','CommentController@update')->middleware(['auth']);
Route::get('/comment-delete/{id}','CommentController@delete')->middleware(['auth']);
Route::get('/comment-active-deactive/{id}/{postid}','CommentController@activeDeactiveComment')->middleware(['auth']);



Route::get('/profile-update','AboutController@profile')->middleware(['auth']);
Route::post('/profile-update','AboutController@profileUpdate')->middleware(['auth']);
Route::post('/profile-cvupdate','AboutController@cvUpdate')->middleware(['auth']);

Route::get('/service-add','ServiceController@serviceCreate')->middleware(['auth']);
Route::post('/service-store','ServiceController@serviceStore')->middleware(['auth']);
Route::get('/service-manage','ServiceController@serviceManage')->middleware(['auth']);
Route::get('/service-edit/{id}','ServiceController@edit')->middleware(['auth']);
Route::post('/service-update/{id}','ServiceController@update')->middleware(['auth']);
Route::get('/service-delete/{id}','ServiceController@delete')->middleware(['auth']);
Route::get('/service-active-deactive/{status}/{postid}','ServiceController@activeDeactive')->middleware(['auth']);


Route::get('/manage-gallery','GalleryController@manage');
Route::get('/gallery-active-deactive/{id}/{postid}','GalleryController@activeDeactive');
Route::get('/gallery-create','GalleryController@create')->middleware(['auth']);
Route::post('/gallery-store','GalleryController@store')->middleware(['auth']);
Route::get('/gallery-delete/{id}','GalleryController@delete')->middleware(['auth']);
Route::get('/setting/','AdminController@passwordUpdate');
Route::post('/update-password/','AdminController@updatePassword');


Route::get('/getallimage','ImageUploadController@imagelist')->middleware(['auth']);
Route::post('/formSubmit','ImageUploadController@imageUpload')->middleware(['auth']);

Route::post('/sendmail','AdminController@sendMail');


Route::get('/{url}','BlogController@blogByCategory');

//=========================ADMIN SITE REQUEST END HERE ==========================//