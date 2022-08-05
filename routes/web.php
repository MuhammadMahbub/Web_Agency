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

// Admin Group Route
Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

     // AdminController




    // TestController
    Route::resource('tests', TestController::class);

});

    // ThemeSettingController
    Route::get('theme-color', [ThemeSettingController::class, 'color'])->name('theme.color');
    Route::get('theme-toggle', [ThemeSettingController::class, 'toggle'])->name('theme.toggle');



    //  SubscriberController
    Route::resource('subscribers', SubscriberController::class);
