<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\LocationController as AdminLocationController;
use App\Http\Controllers\Front\LocationController as FrontLocationController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Front\ServiceController as FrontServiceController;


use App\Http\Controllers\Front\MainPageController;
use App\Http\Controllers\Front\BrandPageController;
use App\Http\Controllers\Front\PrivacyPageController;
use App\Http\Controllers\Front\ServicePageController;
use App\Http\Controllers\Front\TermsPageController;

use App\Http\Controllers\Mail\ContactFormController;

//use App\Models\Location;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Front

Route::get('/', [MainPageController::class, 'index'])->name('homepage');
Route::get('/brand', [BrandPageController::class, 'index'])->name('brand');
Route::get('/service', [ServicePageController::class, 'index'])->name('service');
Route::get('/terms', [TermsPageController::class, 'index'])->name('terms');
Route::get('/privacy', [PrivacyPageController::class, 'index'])->name('privacy');
Route::get('/locations', [FrontLocationController::class, 'index'])->name('locations');
Route::get('/location/{slug}', [FrontLocationController::class, 'show'])->name('location');
Route::get('/services', [FrontServiceController::class, 'index'])->name('services');
Route::get('/service/{slug}', [FrontServiceController::class, 'show'])->name('service');

Route::match(['get', 'post'], '/send', [ContactFormController::class, 'send'])->name('sendcontactform');

Route::group(['prefix' => 'amp',],
    function ()
    {
        Route::get('/', [MainPageController::class, 'indexAmp'])->name('homepage-amp');
        Route::get('/brand', [BrandPageController::class, 'indexAmp'])->name('brand-amp');
        Route::get('/service', [ServicePageController::class, 'indexAmp'])->name('service-amp');
        Route::get('/terms', [TermsPageController::class, 'indexAmp'])->name('terms-amp');
        Route::get('/privacy', [PrivacyPageController::class, 'indexAmp'])->name('privacy-amp');
        Route::get('/locations', [FrontLocationController::class, 'indexAmp'])->name('locations-amp');
        Route::get('/location/{slug}', [FrontLocationController::class, 'showAmp'])->name('location-amp');
        Route::get('/services', [FrontServiceController::class, 'index'])->name('services-amp');
        Route::get('/service/{slug}', [FrontServiceController::class, 'show'])->name('service-amp');

        //        Route::match(['get', 'post'], '/send', [ContactFormController::class, 'send'])->name('sendcontactform');

    }
);




// Admin panel
Route::group([
    'prefix' => 'admin',
    'namespase' => 'Admin',
    'middleware' => 'admin',
],
    function ()
    {
        Route::get('/', [Admin\AdminPanelController::class, 'index'])->name('admin.index');
        Route::resource('location', AdminLocationController::class);
        Route::resource('service', AdminServiceController::class);
    }
);
