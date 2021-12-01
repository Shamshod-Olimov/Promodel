<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CategoryController@main');
Route::get('/show_category/{id}', 'CategoryController@show_category');
Route::get('/blog', 'BlogController@blogs');
Route::get('/school', 'PostController@posts');
Route::get('/show_blog/{id}', 'BlogController@show_blog');
Route::get('/madels', 'MadelController@madels');
Route::get('/show_madel/{id}', 'MadelController@show_madel');
Route::get('/becomemodel', 'CategoryController@anketa');
Route::get('/about', 'CategoryController@about');
Route::get('/contact', 'CategoryController@contact');

Route::get('mails', 'MailController@index');
Route::get('mails/delete/{id}', 'MailController@destroy');

Route::resource('blogs', BlogController::class)->middleware('auth');
Route::resource('mails', MailController::class)->middleware('auth');
Route::resource('orders', OrderController::class)->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('madels', MadelController::class)->middleware('auth');
Route::resource('images', ImageController::class)->middleware('auth');
Route::resource('posts', PostController::class)->middleware('auth');
Route::post('/become/store', 'OrderController@store');
Route::post('blogs/store', 'BlogController@store');
Route::post('mails/store', 'MailController@store');
Route::post('madels/store', 'MadelController@store');
Route::post('categories/store', 'CategoryController@store');
Route::post('images/store', 'ImageController@store');
Route::post('posts/store', 'PostController@store');


Route::get('login', 'Auth\LoginController@loginView')->middleware('guest')->name('login');
Route::post('login-post', 'Auth\LoginController@loginPost')->middleware('guest')->name('login-post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
