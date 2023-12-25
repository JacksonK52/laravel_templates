<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* ================= Frontend Route ================= */
Route::get('/', [FrontendController::class, 'index'])->name('index');

/* ================= Authetication Route ================= */
Route::middleware(['guest'])->group(function() {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
});


// Route::get('/', function () {
//     return Inertia::render('WelcomeView');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
