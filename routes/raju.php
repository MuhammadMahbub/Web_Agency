<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaqTopController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TeamMailController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\SocialurlController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ColorSettingController;
use App\Http\Controllers\FaqUnanswerQController;
use App\Http\Controllers\TitleSettingController;
use App\Http\Controllers\GeneralSettingController;
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

// frontend page route

// Home Page
Route::get('/', [FrontendController::class, 'index'])->name('root');

//About Page
Route::get('/about', [FrontendController::class, 'about'])->name('about');

// Service Page
Route::get('/service', [FrontendController::class, 'service'])->name('service');

//Single Service Details Page
Route::get('single/service/details/{service_id}', [FrontendController::class, 'single_service_details'])->name('single.service.details');

//Testimonial Page
Route::get('testimonial', [FrontendController::class, 'testimonial'])->name('testimonial');

//Team Page
Route::get('team', [FrontendController::class, 'team'])->name('team');

//Single Team Details Page
Route::get('single/team/details/{team_slug}', [FrontendController::class, 'single_team_details'])->name('single.team.details');

// sending mail for team member
Route::post('mail/send/team/member', [TeamMailController::class, 'mail_send_team_member'])->name('mail.send.team.member');

//FAQ Page
Route::get('faq', [FrontendController::class, 'faq'])->name('faq.view');


//Blog pages
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');

//Single Blog page Details
Route::get('single/blog/details/{blog_slug}', [FrontendController::class, 'blog_details'])->name('single.blog.details');

// Contact page
Route::get('/contact/us', [FrontendController::class, 'contact_us'])->name('contact/us');

// Client Message
Route::post('/client/message', [FrontendController::class, 'client_message'])->name('client.message');

// Features page
Route::get('/features', [FrontendController::class, 'features'])->name('features');


// all backend routing
Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

    //Admin Controller
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('users/create', [AdminController::class, 'userCreate'])->name('users.create');
    Route::post('users/store', [AdminController::class, 'userStore'])->name('users.store');
    Route::get('users/edit/{id}', [AdminController::class, 'userEdit'])->name('users.edit');
    Route::put('users/update/{id}', [AdminController::class, 'userUpdate'])->name('users.update');
    Route::get('users/list', [AdminController::class, 'userList'])->name('users.index');
    Route::delete('users/{id}/destroy', [AdminController::class, 'userDestroy'])->name('users.destroy');

    // Service Controller
    Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('service/edit/{service_id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::get('service/show/{service_id}', [ServiceController::class, 'show'])->name('service.show');

    Route::put('service/update/{service_id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('service/delete/{service_id}', [ServiceController::class, 'delete'])->name('service.delete');


    //Testimonial Controller
    Route::resource('testimonial', TestimonialController::class);

    //Team Controller
    Route::resource('team', TeamController::class);

    //Faq Controller
    Route::resource('faq', FaqController::class);

    //Faq Top Controller
    Route::resource('faq_top', FaqTopController::class);

    //Faq Bottom Controller
    Route::resource('faq_unanswer', FaqUnanswerQController::class);


    // Contact Us Controller
    Route::resource('contact_us', ContactusController::class);

    //  ColorSettingController
    Route::resource('colorSettings', ColorSettingController::class);

    //  GeneralSettingController
    Route::resource('generalSettings', GeneralSettingController::class);

    //  TitleSettingController
    Route::resource('titleSettings', TitleSettingController::class);

    //  SocialurlController
    Route::resource('socialurls', SocialurlController::class);



});


