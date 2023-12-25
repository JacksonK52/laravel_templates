<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* ================= Frontend Route ================= */
Route::get('/', [FrontendController::class, 'index'])->name('index');

// Route::get('/', function () {
//     return Inertia::render('WelcomeView');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
