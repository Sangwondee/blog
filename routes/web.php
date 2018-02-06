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

// User Route For
Route::group(['namespace' => 'User'] , function(){
  Route::get('/', 'HomeController@index') ;
  Route::get('post','PostController@index')->name('post');
});



// Admin Route
Route::group(['namespace' => 'Admin'], function(){

  Route::get('admin/home','HomeController@index')->name('admin.home');

  // Admin User Route
  Route::resource('admin/user','UserController');
  
  //Admin Post Route
  Route::resource('admin/post','PostController');
  // Admin Tag Route
  Route::resource('admin/tag','TagController');
  // Admin Category Route
  Route::resource('admin/category','CategoryController');
});
