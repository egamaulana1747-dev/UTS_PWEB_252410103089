<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Redirect root ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Halaman Login
Route::get('/login', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('login.process');

// Halaman setelah login
Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'showProfile'])->name('profile');

// Logout
Route::get('/logout', [PageController::class, 'logout'])->name('logout');