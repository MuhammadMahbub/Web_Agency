<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddURLController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MyContactController;
use App\Http\Controllers\{GalleryController,ProcessController,AboutController,BlogCategoryController, BlogController, BlogCommentController};

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    // mycontact
    Route::get('/mycontact', [MyContactController::class, 'index'])->name('mycontact.index');
    Route::get('/mycontact/create', [MyContactController::class, 'create'])->name('mycontact.create');

    // Process
    Route::get('/process', [ProcessController::class, 'index'])->name('process.index');
    Route::get('/process/create', [ProcessController::class, 'create'])->name('process.create');
    Route::post('/process/store', [ProcessController::class, 'store'])->name('process.store');
    Route::get('/process/show/{id}', [ProcessController::class, 'show'])->name('process.show');
    Route::get('/process/{process}/edit', [ProcessController::class, 'edit'])->name('process.edit');
    Route::put('/process/{process}/update', [ProcessController::class, 'update'])->name('process.update');
    Route::delete('/process/{process}/destroy', [ProcessController::class, 'destroy'])->name('process.destroy');

    // about
    Route::get('/about/header', [AboutController::class, 'about_header'])->name('about_header');
    Route::put('/about/header/update/{id}', [AboutController::class, 'about_header_update'])->name('about_header_update');

    Route::get('/about/us', [AboutController::class, 'about_us'])->name('about_us');
    Route::put('/about/us/update/{id}', [AboutController::class, 'about_us_update'])->name('about_us_update');

    Route::get('/about/back/img', [AboutController::class, 'about_back_img'])->name('about_back_img');
    Route::put('/about/back/image/update/{id}', [AboutController::class, 'about_back_img_update'])->name('about_back_img_update');

    Route::resource('blogcategory', BlogCategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::get('/blog/details/{slug}', [BlogController::class, 'blog_details'])->name('blog.details');


    // Route::get('/blog/search', [BlogController::class, 'search'])->name('blog.search');


    // Galleryall_galleries

    Route::get('/gallery/name', [GalleryController::class, 'gallery_name_index'])->name('gallery_name.index');
    Route::get('/gallery/name/create', [GalleryController::class, 'gallery_name_create'])->name('gallery_name.create');
    Route::post('/gallery/name/store', [GalleryController::class, 'gallery_name_store'])->name('gallery_name.store');
    Route::delete('/gallery/name/destroy/{id}', [GalleryController::class, 'gallery_name_destroy'])->name('gallery_name.destroy');
    Route::resource('gallery', GalleryController::class);

    Route::resource('button', ButtonController::class);


});


Route::resource('blogcomment', BlogCommentController::class);
Route::post('/category/wise/blogs/', [FrontendController::class, 'category_wise_blogs'])->name('category.wise.blogs');
Route::get('/blog/like/{id}', [FrontendController::class, 'blog_like'])->name('blog.like');
Route::get('/category/wise/blogs/details', [FrontendController::class, 'cat_wise_blogs'])->name('cat.wise.blogs');
Route::get('/category/wise/blogs/details/{id}', [FrontendController::class, 'cate_wise_blogs'])->name('cate.wise.blogs');
Route::post('/search/wise/blogs/', [FrontendController::class, 'search_wise_blogs'])->name('search.wise.blogs');
Route::get('/search/blog', [FrontendController::class, 'SearchBlogs'])->name('search.blogs');
Route::get('all/galleries/', [FrontendController::class, 'all_galleries'])->name('all_galleries');


