<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\TeknisiAuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\LandingPageController;


// Route untuk Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route untuk halaman register dan login customer
Route::get('customer/register', [CustomerAuthController::class, 'showRegisterForm'])->name('customer.register');
Route::post('customer/register', [CustomerAuthController::class, 'register']);
Route::get('customer/login', [CustomerAuthController::class, 'showLoginForm'])->name('customer.login');
Route::post('customer/login', [CustomerAuthController::class, 'login']);
Route::post('customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

// Admin Routes
Route::get('admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('admin/register', [AdminAuthController::class, 'register']);
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Teknisi Routes - Dilindungi middleware admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('teknisi/register', [TeknisiAuthController::class, 'showRegisterForm'])->name('teknisi.register');
    Route::post('teknisi/register', [TeknisiAuthController::class, 'register']);
});

Route::get('teknisi/login', [TeknisiAuthController::class, 'showLoginForm'])->name('teknisi.login');
Route::post('teknisi/login', [TeknisiAuthController::class, 'login']);
Route::post('teknisi/logout', [TeknisiAuthController::class, 'logout'])->name('teknisi.logout');

// Route untuk dashboard
Route::get('customer/dashboard', function () {
    return view('customer.dashboard');
})->middleware('auth:customer')->name('customer.dashboard');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth:admin')->name('admin.dashboard');

Route::get('teknisi/dashboard', function () {
    return view('teknisi.dashboard');
})->middleware('auth:teknisi')->name('teknisi.dashboard');
