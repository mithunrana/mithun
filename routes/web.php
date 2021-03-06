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
Route::get('/privacy-policy','PrivacyPolicyController@index');
Auth::routes(['register' => false]);
Route::get('login', 'UIHomeController@login')->name('login');
//=========================USER SITE REQUEST END HERE ========================//


//========Get Location By Ip Address========//
Route::get('/admin/get-ip-details', function () {
    $ip = '103.88.24.19';
    $data = \Location::get($ip);
    dd($data);
});
//========Get Location By Ip Address========//


//========PDF GENERATE START HERE========//
Route::get('/admin/expertnesslist','AdminController@generatePdf')->middleware(['auth']);
//========PDF GENERATE END HERE========//


//=========================ADMIN SITE REQUEST START HERE ========================//
Route::get('/admin/admin-panel','AdminController@index')->middleware(['auth']);
Route::get('/category','CategoryController@index')->middleware(['auth']);
Route::post('/categorysave','CategoryController@store')->middleware(['auth']);
Route::get('/getall-category','CategoryController@getAll')->middleware(['auth']);
Route::post('/update-category','CategoryController@categoryUpdate')->middleware(['auth']);
Route::post('/delete-category','CategoryController@categoryDelete')->middleware(['auth']);

Route::get('/portfolio-category','PortfolioController@portfolioCategory')->middleware(['auth']);
Route::post('/portfolio-category-save','PortfolioController@portfolioCategoryStore')->middleware(['auth']);
Route::get('/getall-portfolio-category','PortfolioController@getAllCategory')->middleware(['auth']);
Route::post('/update-portfolio-category','PortfolioController@portfolioCategoryUpdate')->middleware(['auth']);

Route::get('/admin/blog-manage','BlogController@manage')->middleware(['auth']);
Route::get('/admin/blog-add','BlogController@create')->middleware(['auth']);
Route::post('/admin/blog-add','BlogController@store')->middleware(['auth']);
Route::get('/admin/blog-edit/{id}','BlogController@edit')->middleware(['auth']);
Route::post('/admin/blog-update/{id}','BlogController@update')->middleware(['auth']);
Route::get('/admin/blog-delete/{id}','BlogController@delete')->middleware(['auth']);
Route::get('/admin/blog-active-deactive/{id}/{postid}','BlogController@blogActiveDeactive')->middleware(['auth']);


Route::get('/admin/portfolio-manage','PortfolioController@portfolioManage')->middleware(['auth']);
Route::get('/admin/portfolio-add','PortfolioController@create')->middleware(['auth']);
Route::get('/admin/portfolio-edit/{id}','PortfolioController@portfolioEdit')->middleware(['auth']);
Route::post('/admin/portfolio-store','PortfolioController@store')->middleware(['auth']);
Route::post('/admin/portfolio-update/{id}','PortfolioController@portfolioUpdate')->middleware(['auth']);
Route::get('/admin/portfolio-delete/{id}','PortfolioController@portfolioDelete')->middleware(['auth']);
Route::post('/admin/portfolio-category-delete/','PortfolioController@portfolioCategoryDelete')->middleware(['auth']);
Route::get('/admin/portfolio-active-deactive/{id}/{postid}','PortfolioController@portfolioActiveDeactive')->middleware(['auth']);



Route::get('/admin/manage-expertness','ExpertnessWithQualification@manageExpertness')->middleware(['auth']);
Route::get('/admin/add-expertness','ExpertnessWithQualification@addExpertness')->middleware(['auth']);
Route::post('/admin/store-expertness','ExpertnessWithQualification@storeExpertness')->middleware(['auth']);
Route::get('/admin/edit-expertness/{id}','ExpertnessWithQualification@editExpertness')->middleware(['auth']);
Route::post('/admin/update-expertness/{id}','ExpertnessWithQualification@updateExpertness')->middleware(['auth']);
Route::get('/admin/delete-expertness/{id}','ExpertnessWithQualification@deleteExpertness')->middleware(['auth']);
Route::get('/admin/expertness-active-deactive/{id}/{postid}','ExpertnessWithQualification@activeDeactiveExpertness')->middleware(['auth']);




Route::get('/admin/manage-qualification','ExpertnessWithQualification@manageQualification')->middleware(['auth']);
Route::get('/admin/add-qualification','ExpertnessWithQualification@addQualification')->middleware(['auth']);
Route::post('/admin/store-qualification','ExpertnessWithQualification@storeQualification')->middleware(['auth']);
Route::get('/admin/edit-qualification/{id}','ExpertnessWithQualification@editQualification')->middleware(['auth']);
Route::post('/admin/update-qualification/{id}','ExpertnessWithQualification@updateQualification')->middleware(['auth']);
Route::get('/admin/delete-qualification/{id}','ExpertnessWithQualification@deleteQualification')->middleware(['auth']);
Route::get('/admin/qualification-active-deactive/{id}/{postid}','ExpertnessWithQualification@activeDeactiveQualification')->middleware(['auth']);



Route::get('/admin/manage-comment','CommentController@index')->middleware(['auth']);
Route::get('/admin/comment-add','CommentController@add')->middleware(['auth']);
Route::post('/admin/comment-store','CommentController@store')->middleware(['auth']);
Route::get('/admin/comment-edit/{id}','CommentController@edit')->middleware(['auth']);
Route::post('/admin/comment-update/{id}','CommentController@update')->middleware(['auth']);
Route::get('/admin/comment-delete/{id}','CommentController@delete')->middleware(['auth']);
Route::get('/admin/comment-active-deactive/{id}/{postid}','CommentController@activeDeactiveComment')->middleware(['auth']);



Route::get('/admin/profile-update','AboutController@profile')->middleware(['auth']);
Route::post('/admin/profile-update','AboutController@profileUpdate')->middleware(['auth']);
Route::post('/admin/profile-cvupdate','AboutController@cvUpdate')->middleware(['auth']);

Route::get('/admin/service-add','ServiceController@serviceCreate')->middleware(['auth']);
Route::post('/admin/service-store','ServiceController@serviceStore')->middleware(['auth']);
Route::get('/admin/service-manage','ServiceController@serviceManage')->middleware(['auth']);
Route::get('/admin/service-edit/{id}','ServiceController@edit')->middleware(['auth']);
Route::post('/admin/service-update/{id}','ServiceController@update')->middleware(['auth']);
Route::get('/admin/service-delete/{id}','ServiceController@delete')->middleware(['auth']);
Route::get('/admin/service-active-deactive/{status}/{postid}','ServiceController@activeDeactive')->middleware(['auth']);


Route::get('/admin/manage-gallery','GalleryController@manage');
Route::get('/admin/gallery-active-deactive/{id}/{postid}','GalleryController@activeDeactive');
Route::get('/admin/gallery-create','GalleryController@create')->middleware(['auth']);
Route::post('/admin/gallery-store','GalleryController@store')->middleware(['auth']);
Route::get('/admin/gallery-delete/{id}','GalleryController@delete')->middleware(['auth']);
Route::get('/admin/setting/','AdminController@passwordUpdate')->middleware(['auth']);
Route::post('/admin/update-password/','AdminController@updatePassword')->middleware(['auth']);


Route::get('/admin/manage-privacy-policy','PrivacyPolicyController@privacyPolicyManage')->middleware(['auth']);
Route::get('/admin/add-privacy-policy','PrivacyPolicyController@add')->middleware(['auth']);
Route::post('/admin/store-privacy-policy','PrivacyPolicyController@store')->middleware(['auth']);
Route::get('/admin/edit-privacy-policy/{id}','PrivacyPolicyController@edit')->middleware(['auth']);
Route::post('/admin/update-privacy-policy/{id}','PrivacyPolicyController@update')->middleware(['auth']);
Route::get('/admin/delete-privacy-policy/{id}','PrivacyPolicyController@delete')->middleware(['auth']);
Route::get('/admin/active-deactive-privacy-policy/{id}/{activestaus}','PrivacyPolicyController@activeDeactive')->middleware(['auth']);


Route::get('/getallimage','ImageUploadController@imagelist')->middleware(['auth']);
Route::post('/formSubmit','ImageUploadController@imageUpload')->middleware(['auth']);

Route::post('admin/sendmail','AdminController@sendMail');


Route::get('/{url}','BlogController@blogByCategory');

//=========================ADMIN SITE REQUEST END HERE ==========================//