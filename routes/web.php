<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\ServicesTreeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\BaseInfoController;
use App\Http\Controllers\SeoController;

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

Route::get('/', [IndexPageController::class, 'index'])->name('main');

//Route::get('/test',[ServicesTreeController::class,'index'])->name('test');

Route::view('/company', 'company')->name('company');

Route::get('/services', [ServicesTreeController::class, 'indexsections'])->name('servicessections');

Route::get('/services/{title}', [ServicesTreeController::class, 'indexsubsections'])->name('servicessubsections');

Route::get('/services/asdsd/{id}', [ServicesController::class, 'detail'])->name('ShowDetailPage');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/projects/year-{date}', [ProjectController::class, 'index_filter'])->name('projects_filter');

Route::get('/projects/{id}', [ProjectController::class, 'detail'])->name('ShowProjectDetailPage');

Route::get('/news', [PostsController::class, 'index'])->name('news');

Route::get('/news/year-{date}', [PostsController::class, 'index_filter'])->name('news_filter');

Route::get('/news/{id}', [PostsController::class, 'detail'])->name('new_detail');

Route::get('/contacts', [IndexPageController::class, 'show_contacts'])->name('contacts');

Route::view('/registration', 'registrate')->name('registrate_page');

Route::get('/cabinet', [IndexPageController::class, 'show_cabinet'])->name('cabinet');

Route::post('/registrate', [UserController::class, 'UserAdd'])->name('UserAdd');

Route::post('/auth', [UserController::class, 'UserAuth'])->name('UserAuth');

Route::get('/about', [IndexPageController::class, 'show_company_about'])->name('about');

Route::get('/personal', [UserController::class, 'index'])->name('personal');

Route::get('/personal/{id}', [UserController::class, 'detail'])->name('personal_detail');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');

Route::post('/askquestion', [BidController::class, 'askquestion'])->name('askquestion');

Route::post('/takerequest', [BidController::class, 'takerequest'])->name('takerequest');

Route::post('/writemessage', [BidController::class, 'writemessage'])->name('writemessage');

Route::view('/message', 'index');

Route::middleware('role.check')->group(function () {

    Route::view('/adminpage', 'dashboard')->name('adminpage');

    Route::view('/adminpage/orders_admin_list', 'orders_admin_list')->name('orders_admin_list');

    Route::view('/dashboard', 'dashboard')->name('dashboard');



    Route::get('/adminpage/bid_admin_list', [BidController::class, 'ShowTable'])->name('bid_admin_list');



    Route::get('/AddPageProject', [ProjectController::class, 'AddPage'])->name('AddPage');

    Route::post('/projects_admin_list/AddPage', [ProjectController::class, 'AddProject'])->name('AddProject');

    Route::get('/adminpage/projects_admin_list', [ProjectController::class, 'ShowTable'])->name('ShowTable');

    Route::get('/projects_admin_list/EditPage/{id}', [ProjectController::class, 'EditPage'])->name('EditPage');

    Route::post('/projects_admin_list/EditPage/Update-{id}', [ProjectController::class, 'UpdateProject'])->name('UpdateProject');

    Route::delete('/projects_admin_list/Delete-{id}', [ProjectController::class, 'delete'])->name('ProjectDelete');

    Route::post('/projects_admin_list/Restore-{id}', [ProjectController::class, 'restore'])->name('ProjectRestore');




    Route::get('/adminpage/posts_admin_list', [PostsController::class, 'ShowTable'])->name('ShowTablePosts');

    Route::get('/AddPagePost', [PostsController::class, 'AddPagePosts'])->name('AddPagePosts');

    Route::post('/posts_admin_list/AddPage', [PostsController::class, 'AddPost'])->name('AddPost');

    Route::get('/posts_admin_list/EditPagePost/{id}', [PostsController::class, 'EditPagePost'])->name('EditPagePost');

    Route::post('/posts_admin_list/EditPage/Update-{id}', [PostsController::class, 'UpdatePost'])->name('UpdatePost');

    Route::delete('/posts_admin_list/Delete-{id}', [PostsController::class, 'delete'])->name('PostDelete');

    Route::post('/posts_admin_list/Restore-{id}', [PostsController::class, 'restore'])->name('PostRestore');




    //Route::get('/adminpage/services_admin_list', [ServicesController::class, 'ShowTable'])->name('ShowTableServices');

    Route::get('/AddPageService', [ServicesController::class, 'AddPageService'])->name('AddPageService');

    Route::post('/services_admin_list/AddPage', [ServicesController::class, 'AddService'])->name('AddService');

    Route::get('/services_admin_list/EditPageService/{id}', [ServicesController::class, 'EditPageService'])->name('EditPageService');

    Route::post('/services_admin_list/UpdateService/Update-{id}', [ServicesController::class, 'UpdateService'])->name('UpdateService');

    Route::delete('/services_admin_list/Delete-{id}', [ServicesController::class, 'delete'])->name('ServiceDelete');

    Route::post('/services_admin_list/Restore-{id}', [ServicesController::class, 'restore'])->name('ServiceRestore');

    Route::get('/AddPageSection', [ServicesTreeController::class, 'AddPageSection'])->name('AddPageSection');

    Route::post('/services_admin_list/AddSection', [ServicesTreeController::class, 'AddSection'])->name('AddSection');


    Route::get('/adminpage/services_admin_list/sections-{id}', [ServicesTreeController::class, 'tablesections'])->name('ShowTableServicesSections');

    Route::get('/adminpage/services_admin_list/subsection-{id}', [ServicesTreeController::class, 'tablesubsections'])->name('ShowTableServicesSubsections');

    Route::get('/services_admin_list/EditPageServiceSection/{id}', [ServicesTreeController::class, 'EditPageServiceSection'])->name('EditPageServiceSection');

    Route::post('/services_admin_list/UpdateServiceSection/Update-{id}', [ServicesTreeController::class, 'UpdateServiceSection'])->name('UpdateServiceSection');

    Route::delete('/services_admin_list/SectionDelete-{id}', [ServicesTreeController::class, 'delete'])->name('SectionServiceDelete');

    Route::post('/services_admin_list/SectionRestore-{id}', [ServicesTreeController::class, 'restore'])->name('SectionServiceRestore');





    Route::get('/adminpage/reviews_admin_list', [ReviewController::class, 'ShowTable'])->name('ShowTableReviews');

    Route::get('/AddPageReview', [ReviewController::class, 'AddPageReview'])->name('AddPageReview');

    Route::post('/reviews_admin_list/AddPage', [ReviewController::class, 'AddReview'])->name('AddReview');

    Route::get('/reviews_admin_list/EditPageReview/{id}', [ReviewController::class, 'EditPageReview'])->name('EditPageReview');

    Route::post('/reviews_admin_list/UpdateReview/Update-{id}', [ReviewController::class, 'UpdateReview'])->name('UpdateReview');

    Route::delete('/reviews_admin_list/Delete-{id}', [ReviewController::class, 'delete'])->name('ReviewDelete');

    Route::post('/reviews_admin_list/Restore-{id}', [ReviewController::class, 'restore'])->name('ReviewRestore');

    /* Функционал Пользователя из админки */

    Route::get('/adminpage/users_admin_list', [UserController::class, 'ShowTable'])->name('ShowTableUsers');

    Route::get('/AddPageUser', [UserController::class, 'AddPageUser'])->name('AddPageUser');

    Route::get('/users_admin_list/EditPageUser/{id}', [UserController::class, 'EditPageUser'])->name('EditPageUser');

    Route::post('/users_admin_list/UpdateUser/Update-{id}', [UserController::class, 'UpdateUser'])->name('UpdateUser');

    Route::delete('/users_admin_list/Delete-{id}', [UserController::class, 'delete'])->name('UserDelete');

    Route::post('/users_admin_list/Restore-{id}', [UserController::class, 'restore'])->name('UserRestore');

    /* Функционал настройки контактов */

    Route::get('/adminpage/contact_admin_list', [BaseInfoController::class, 'show_contacts'])->name('ShowContacts');

    Route::get('/adminpage/contact_admin_list/update', [BaseInfoController::class, 'update_contacts'])->name('UpdateContacts');

    /* Функционал соцсетей */

    Route::get('/adminpage/socseti_admin_list', [BaseInfoController::class, 'show_socseti'])->name('ShowSocseti');

    Route::get('/adminpage/socseti_admin_list/update', [BaseInfoController::class, 'update_socseti'])->name('UpdateSocseti');

    /* Функционал Сео */

    Route::get('/adminpage/Seo',[SeoController::class,'seo_admin_index'])->name('seo_index');

    Route::get('/adminpage/Seo/robots', [SeoController::class, 'show_robots'])->name('ShowRobots');

    Route::post('/adminpage/Seo/robots/update', [SeoController::class, 'save'])->name('UpdateRobots');


});
