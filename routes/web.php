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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/home', 'PagesController@index');

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/projects', 'PagesController@projects')->name('projects');
Route::get('/shop', 'PagesController@shop')->name('shop');
Route::get('/blog', 'PagesController@blog')->name('blog');