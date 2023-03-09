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

Route::view('/', 'content')->name('main');

Route::view('/company','company')->name('company');

Route::view('/services','services')->name('services');

Route::view('/projects','projects')->name('projects');

Route::view('/news','news')->name('news');

Route::view('/contacts','contacts')->name('contacts');

Route::view('/adminpage','adminpage')->name('adminpage');

Route::view('/adminpage/projects_admin_list','projects_admin_list')->name('projects_admin_list');

Route::view('/adminpage/services_admin_list','services_admin_list')->name('services_admin_list');

Route::view('/adminpage/posts_admin_list','posts_admin_list')->name('posts_admin_list');

Route::view('/adminpage/users_admin_list','users_admin_list')->name('users_admin_list');

Route::view('/adminpage/reviews_admin_list','reviews_admin_list')->name('reviews_admin_list');

Route::view('/adminpage/orders_admin_list','orders_admin_list')->name('orders_admin_list');
