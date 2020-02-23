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

Route::get('/','HomeController@getIndex')->name('home');

Route::get('/signin','UserController@getSignin')->middleware('CheckSignedIn')->name('get.signin');
Route::post('/signin','UserController@postSignin')->name('post.signin');

Route::get('/signup','UserController@getSignup')->name('get.signup');
Route::post('/signup','UserController@postSignup')->name('post.signup');

Route::get('/user','UserController@getUserInfo')->name('get.user');
Route::post('/user/{id}','UserController@postUserInfo')->name('post.user');
Route::post('/user/{id}/changepassword','UserController@postChangePassword')->name('change.password');
Route::get('/user/signout','UserController@getSignOut')->name('get.signout');
Route::get('/listtest', 'HomeController@getListTest')->name('listTest')->middleware('CheckSignedOut');
Route::get('/test/detailtest/{id}','HomeController@getDetailTest')->name('getDetailTest');
Route::post('/test/detailtest/{id}','HomeController@postDetailTest')->name('postDetailTest');
Route::get('/solvethetest','HomeController@getSolveTheTest')->name('solveTheTest');
Route::get('/test/result/{rid}', 'HomeController@getTestResult')->name('test.result');

Route::get('/tin-tuc/{cate_id}/{cate_slug}', 'HomeController@getListNews')->name('get.list.news');

Route::get('/tin-tuc/{cate_slug}/{news_slug}/{news_id}','HomeController@getNewsDetail')->name('get.news.detail');

Route::get('/tin-hoc/{doc_id}/{doc_slug}','HomeController@getDocument')->name('get.document');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['CheckSignedOut', 'CheckAdmin']], function(){

	Route::resource('/news','NewsController');

	Route::resource('/category','CategoryController')->except('show');

	Route::resource('/banner','BannerController');

	Route::resource('/document', 'DocumentController');

	Route::resource('/docate', 'DocumentCategoryController');

	Route::resource('/test','TestController');

	Route::resource('/question', 'QuestionController');
});


