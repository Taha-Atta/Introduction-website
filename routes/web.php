<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('front.index');
// });

/**
 * Route front
 */
Route::name('front.')->controller(FrontController::class)->group(function () {

    Route::post('/subscriber/store', 'subscriber')->name('subscriber.store');
    Route::post('/message/store', 'message')->name('message.store');

    //======================================= INDEX
    Route::get('/', 'index')->name('index');
    //======================================= ABOUT
    Route::get('/about', 'about')->name('about');
    //======================================= SERVICE
    Route::get('/service', 'service')->name('service');
    //======================================= CONTACT
    Route::get('/contact', 'contact')->name('contact');
});

/**
 * Route admin
 */


Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware(
    ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
)->group(function () {

    //=========================================== Home Page
    Route::middleware('auth')->group(function () {
        Route::view('/', 'admin.index')->name('index');
    });

    //=========================================== Services
    Route::controller(ServiceController::class)->group(function () {
        Route::resource('services', ServiceController::class);
    });
    //=========================================== features
    Route::controller(FeatureController::class)->group(function () {
        Route::resource('features', FeatureController::class);
    });
    //=========================================== Massages
    Route::controller(MessageController::class)->group(function () {
        Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
    });
    //=========================================== subscribers
    Route::controller(SubscriberController::class)->group(function () {
        Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
    });
    //=========================================== testimonials
    Route::controller(TestimonialController::class)->group(function () {
        Route::resource('testimonials', TestimonialController::class);
    });
    //=========================================== settings
    Route::controller(SettingController::class)->group(function () {
        Route::resource('settings', SettingController::class);
    });
    //=========================================== members
    Route::controller(MemberController::class)->group(function () {


        Route::resource('members', MemberController::class)->except('show');
        Route::get('members/show/{membe}', [MemberController::class,'show'])->name('members.show');

    });

    require __DIR__ . '/auth.php';
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
