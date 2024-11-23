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
    return view('pages.dashboard.page');
});

// Google Auth
Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect']);
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback']);

// Auth
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function (Request $request) {
        return view('pages.dashboard.page');
    });
});
