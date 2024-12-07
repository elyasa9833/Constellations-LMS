<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleAuthController;

// Route::get('/', function () {
//     // return view('welcome');
//     $carouselItems = [
//         'Slide 1 - Welcome to Laravel',
//         'Slide 2 - Building with Alpine.js',
//         'Slide 3 - Dynamic Carousel with Tailwind'
//     ];
//     return view('pages.dashboard.page', compact('carouselItems'));
// });

Route::get('/', function () {
    // return view('layouting', compact('carouselItems'));
    // return view('pages.dashboard.page');
    // return view('test');
    // return view('pages.dashboard.view');
    return view('pages.template.view');
});

// Google Auth
Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback']);

// Auth
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/',  function(){return view('pages.dashboard.view');});
    });

    Route::prefix('course')->name('course.')->group(function () {
        Route::get('/',  function(){return view('pages.course.view');});
        // Route::get('/', [CourseController::class, 'index'])->name('index');
    });

    Route::prefix('template')->name('template.')->group(function () {
        Route::get('/',  function(){return view('pages.template.view');});
        // Route::get('/', [UserController::class, 'index'])->name('index');
    });

    // ========================================
    Route::get('/slot/{slotName}', function ($slotName) {
        return view("slots.dashboard.view")->render();
    })->name('slot'); // Route untuk mengakses slot berdasarkan nama
    // ========================================

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/',  function(){return view('pages.course_wizard.view');});
        // Route::get('/', [UserController::class, 'index'])->name('index');
    });


    // Route::get('/dashboard', function (Request $request) {
    //     return view('pages.dashboard.page');
    // });
});
