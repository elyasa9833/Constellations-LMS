<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', static fn() => response()->json(['message' => 'Welcome']))->name('home');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
