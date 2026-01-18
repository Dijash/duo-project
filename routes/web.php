<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\site\HomeController;

// Dashboard Admin Route
Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');

// Site Home Route
Route::get('/', [HomeController::class, 'index'])->name('site.home');
