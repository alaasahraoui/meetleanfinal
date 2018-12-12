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
 // auth route 
Route::post('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::post('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/logout', 'Auth\AuthController@getLogout');
 //reg R
Route::post('auth/login', 'Auth\AuthController@getLogin');

Route::get('/', 'PagesController@getIndex');
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout'); 
 
Route::resource('posts', 'PostController'); 
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
