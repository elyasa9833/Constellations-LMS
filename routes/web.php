<?php

use Illuminate\Support\Facades\Route;

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
    $carouselItems = [
        // 'assets/icons/Icon Dark.png',
        // 'assets/icons/Icon Light.png',
        'https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/event/dos-offline_roadshow_1_coding_camp_2025_powered_by_dbs_foundation_goes_to_bandung_logo_181124100353.png',
        'https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/event/dos-offline_idcamp_connect_roadshow_timika_logo_111124093306.png'
    ];
    // return view('layouting', compact('carouselItems'));
    return view('pages.dashboard.page', compact('carouselItems'));
});
