<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SocialurlController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ColorSettingController;
use App\Http\Controllers\ThemeSettingController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BuyNowController;
use App\Http\Controllers\MarketStretegyController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StartProjectController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\AddURLController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MyContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FaqTopController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamMailController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FaqUnanswerQController;
use App\Http\Controllers\TitleSettingController;


Route::group(['middleware' => 'visitor_log'], function(){
    Route::get('/user/login', function () {
        return redirect('login');
    });
});

Route::get('locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return back();
})->name('locale');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');

Route::get('/', [FrontendController::class, 'index'])->name('root');

Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('users/create', [AdminController::class, 'userCreate'])->name('users.create');
    Route::post('users/store', [AdminController::class, 'userStore'])->name('users.store');
    Route::get('users/edit/{id}', [AdminController::class, 'userEdit'])->name('users.edit');
    Route::put('users/update/{id}', [AdminController::class, 'userUpdate'])->name('users.update');
    Route::get('users/list', [AdminController::class, 'userList'])->name('users.index');
    Route::delete('users/{id}/destroy', [AdminController::class, 'userDestroy'])->name('users.destroy');

    Route::get('company/index', [companyController::class, 'index'])->name('company.index');
    Route::put('/company/update/{id}', [companyController::class, 'update'])->name('company.update');

    Route::get('/marketStretegy/index', [MarketStretegyController::class, 'index'])->name('m_stretegy.index');
    Route::put('/marketStretegy/{id}/update/', [MarketStretegyController::class, 'update'])->name('m_stretegy.update');

    Route::resource('review', ReviewController::class);

    Route::resource('buyNow', BuyNowController::class);

    Route::resource('banner', BannerController::class);

    Route::resource('startProject', StartProjectController::class);

    Route::resource('feature', FeatureController::class);

    Route::resource('contact_us', ContactusController::class);
    Route::get('/mycontact', [MyContactController::class, 'index'])->name('mycontact.index');
    Route::get('/mycontact/create', [MyContactController::class, 'create'])->name('mycontact.create');

    Route::get('/process', [ProcessController::class, 'index'])->name('process.index');
    Route::get('/process/create', [ProcessController::class, 'create'])->name('process.create');
    Route::post('/process/store', [ProcessController::class, 'store'])->name('process.store');
    Route::get('/process/show/{id}', [ProcessController::class, 'show'])->name('process.show');
    Route::get('/process/{process}/edit', [ProcessController::class, 'edit'])->name('process.edit');
    Route::put('/process/{process}/update', [ProcessController::class, 'update'])->name('process.update');
    Route::delete('/process/{process}/destroy', [ProcessController::class, 'destroy'])->name('process.destroy');

    Route::get('/about/header', [AboutController::class, 'about_header'])->name('about_header');
    Route::put('/about/header/update/{id}', [AboutController::class, 'about_header_update'])->name('about_header_update');
    Route::get('/about/us', [AboutController::class, 'about_us'])->name('about_us');
    Route::put('/about/us/update/{id}', [AboutController::class, 'about_us_update'])->name('about_us_update');
    Route::get('/about/back/img', [AboutController::class, 'about_back_img'])->name('about_back_img');
    Route::put('/about/back/image/update/{id}', [AboutController::class, 'about_back_img_update'])->name('about_back_img_update');

    Route::resource('blogcategory', BlogCategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::get('/blog/details/{slug}', [BlogController::class, 'blog_details'])->name('blog.details');

    Route::resource('gallery', GalleryController::class);
    Route::get('/gallery/name', [GalleryController::class, 'gallery_name_index'])->name('gallery_name.index');
    Route::get('/gallery/name/create', [GalleryController::class, 'gallery_name_create'])->name('gallery_name.create');
    Route::post('/gallery/name/store', [GalleryController::class, 'gallery_name_store'])->name('gallery_name.store');
    Route::put('/gallery/name/update/{id}', [GalleryController::class, 'gallery_name_update'])->name('gallery_name.update');
    Route::delete('/gallery/name/destroy/{id}', [GalleryController::class, 'gallery_name_destroy'])->name('gallery_name.destroy');

    Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('service/edit/{service_id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::get('service/show/{service_id}', [ServiceController::class, 'show'])->name('service.show');
    Route::put('service/update/{service_id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('service/delete/{service_id}', [ServiceController::class, 'delete'])->name('service.delete');

    Route::resource('testimonial', TestimonialController::class);

    Route::resource('team', TeamController::class);

    Route::resource('faq', FaqController::class);

    Route::resource('faq_top', FaqTopController::class);

    Route::resource('faq_unanswer', FaqUnanswerQController::class);

    Route::resource('colorSettings', ColorSettingController::class);

    Route::resource('generalSettings', GeneralSettingController::class);

    Route::resource('titleSettings', TitleSettingController::class);

    Route::resource('socialurls', SocialurlController::class);

    Route::resource('button', ButtonController::class);

});

    Route::get('theme-color', [ThemeSettingController::class, 'color'])->name('theme.color');
    Route::get('theme-toggle', [ThemeSettingController::class, 'toggle'])->name('theme.toggle');

    Route::resource('subscribers', SubscriberController::class);

    Route::post('day/change/admin', [AdminController::class, 'day_change_admin'])->name('day.change.admin');

    Route::resource('blogcomment', BlogCommentController::class);
    Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
    Route::post('/category/wise/blogs/', [FrontendController::class, 'category_wise_blogs'])->name('category.wise.blogs');
    Route::get('/blog/like/{id}', [FrontendController::class, 'blog_like'])->name('blog.like');
    Route::get('/category/wise/blogs/details', [FrontendController::class, 'cat_wise_blogs'])->name('cat.wise.blogs');
    Route::get('/category/wise/blogs/details/{id}', [FrontendController::class, 'cate_wise_blogs'])->name('cate.wise.blogs');
    Route::post('/search/wise/blogs/', [FrontendController::class, 'search_wise_blogs'])->name('search.wise.blogs');
    Route::get('/search/blog', [FrontendController::class, 'SearchBlogs'])->name('search.blogs');
    Route::get('single/blog/details/{blog_slug}', [FrontendController::class, 'blog_details'])->name('single.blog.details');

    Route::get('all/galleries/', [FrontendController::class, 'all_galleries'])->name('all_galleries');

    Route::get('/about', [FrontendController::class, 'about'])->name('about');

    Route::get('/service', [FrontendController::class, 'service'])->name('service');

    Route::get('single/service/details/{service_id}', [FrontendController::class, 'single_service_details'])->name('single.service.details');

    Route::get('testimonial', [FrontendController::class, 'testimonial'])->name('testimonial');

    Route::get('team', [FrontendController::class, 'team'])->name('team');
    Route::get('single/team/details/{team_slug}', [FrontendController::class, 'single_team_details'])->name('single.team.details');
    Route::post('mail/send/team/member', [TeamMailController::class, 'mail_send_team_member'])->name('mail.send.team.member');

    Route::get('faq', [FrontendController::class, 'faq'])->name('faq.view');

    Route::get('/contact/us', [FrontendController::class, 'contact_us'])->name('contact/us');

    Route::post('/client/message', [FrontendController::class, 'client_message'])->name('client.message');

    Route::get('/features', [FrontendController::class, 'features'])->name('features');
