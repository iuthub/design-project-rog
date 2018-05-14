<?php

Route::group(['namespace' => 'User'], function(){
Route::get('/', 'HomeController@index')->name('home');
Route::get('posts', 'PostController@posts')->name('posts');
Route::get('posts/{post}', 'PostController@post')->name('post');
Route::get('about','HomeController@about')->name('about');
Route::get('gallery', 'HomeController@gallery')->name('gallery');
Route::get('contact', 'HomeController@contact')->name('contact');

});



Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	Route::resource('admin/post', 'PostController');

	Route::post('admin/post/create', 'PostController@store');


});
