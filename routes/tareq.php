<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\companyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BuyNowController;
use App\Http\Controllers\MarketStretegyController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StartProjectController;
use App\Http\Controllers\FeatureController;
// use Faker\Guesser\Name;



Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

    Route::get('company/index', [companyController::class, 'index'])->name('company.index');

    Route::put('/company/update/{id}', [companyController::class, 'update'])->name('company.update');

    Route::get('/marketStretegy/index', [MarketStretegyController::class, 'index'])->name('m_stretegy.index');

    Route::put('/marketStretegy/{id}/update/', [MarketStretegyController::class, 'update'])->name('m_stretegy.update');

    Route::resource('review', ReviewController::class);

    Route::resource('buyNow', BuyNowController::class);

    Route::resource('banner', BannerController::class);

    Route::resource('startProject', StartProjectController::class);

    Route::resource('feature', FeatureController::class);

});
