<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MsServiceController;
use App\Http\Controllers\TrPesananController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MsSparepartController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\TeknisiAuthController;
use App\Http\Controllers\Auth\CustomerAuthController;

// Route untuk Home, about, service
Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});

Auth::routes();

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
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('admin/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard');

    //rouute untuk teknisi
    Route::get('teknisi/register', [TeknisiAuthController::class, 'showRegisterForm'])->name('teknisi.register');
    Route::post('teknisi/register', [TeknisiAuthController::class, 'register']);
    Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi.index');
    Route::get('/teknisi/{id}/edit', [TeknisiController::class, 'edit'])->name('teknisi.edit');  
    Route::put('/teknisi/{id}', [TeknisiController::class, 'update'])->name('teknisi.update');   
    Route::delete('/teknisi/{id}', [TeknisiController::class, 'destroy'])->name('teknisi.destroy'); 

    //route untuk customer
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');  
    Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update');   
    Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy'); 

    //route untuk pesanan
    Route::get('pesanan/admin', [TrPesananController::class, 'indexAdmin'])->name('pesanan.admin.index');
    Route::get('pesanan/admin/create', [TrPesananController::class, 'createAdmin'])->name('pesanan.admin.create');
    Route::post('pesanan/admin/store', [TrPesananController::class, 'storeAdmin'])->name('pesanan.admin.store');
    Route::get('pesanan/admin/{id}/edit', [TrPesananController::class, 'adminEdit'])->name('pesanan.admin.edit');
    Route::put('pesanan/admin/{id}', [TrPesananController::class, 'adminUpdate'])->name('pesanan.admin.update');
    Route::delete('pesanan/admin/{id}', [TrPesananController::class, 'destroyAdmin'])->name('pesanan.admin.destroy');

    //route untuk service
    Route::get('services', [MsServiceController::class, 'index'])->name('services.index');
    Route::get('services/create', [MsServiceController::class, 'create'])->name('services.create');
    Route::post('services', [MsServiceController::class, 'store'])->name('services.store');
    Route::get('services/{id}/edit', [MsServiceController::class, 'edit'])->name('services.edit');
    Route::put('services/{id}', [MsServiceController::class, 'update'])->name('services.update');
    Route::delete('services/{id}', [MsServiceController::class, 'destroy'])->name('services.destroy');

    //route untuk sparepart
    Route::get('spareparts', [MsSparepartController::class, 'index'])->name('spareparts.index');
    Route::get('spareparts/create', [MsSparepartController::class, 'create'])->name('spareparts.create');
    Route::post('spareparts', [MsSparepartController::class, 'store'])->name('spareparts.store');
    Route::get('spareparts/{id}/edit', [MsSparepartController::class, 'edit'])->name('spareparts.edit');
    Route::put('spareparts/{id}', [MsSparepartController::class, 'update'])->name('spareparts.update');
    Route::delete('spareparts/{id}', [MsSparepartController::class, 'destroy'])->name('spareparts.destroy');


});


Route::group(['middleware' => 'auth:customer'], function () {
    Route::get('customer/dashboard', function () {return view('customer.dashboard');})->name('customer.dashboard');
    Route::get('pesanan/customer', [TrPesananController::class, 'indexCustomer'])->name('pesanan.customer.index');
    Route::get('pesanan/customer/create', [TrPesananController::class, 'createCustomer'])->name('pesanan.customer.create');
    Route::post('pesanan/customer/store', [TrPesananController::class, 'storeCustomer'])->name('pesanan.customer.store');
    Route::get('pesanan/customer/{id}/edit', [TrPesananController::class, 'customerEdit'])->name('pesanan.customer.edit');
    Route::put('pesanan/customer/{id}', [TrPesananController::class, 'customerUpdate'])->name('pesanan.customer.update');
    Route::delete('pesanan/customer/{id}', [TrPesananController::class, 'destroyCustomer'])->name('pesanan.customer.destroy');
});


Route::get('teknisi/login', [TeknisiAuthController::class, 'showLoginForm'])->name('teknisi.login');
Route::post('teknisi/login', [TeknisiAuthController::class, 'login']);
Route::post('teknisi/logout', [TeknisiAuthController::class, 'logout'])->name('teknisi.logout');

// Route untuk dashboard


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth:admin')->name('admin.dashboard');

Route::get('teknisi/dashboard', function () {
    return view('teknisi.dashboard');
})->middleware('auth:teknisi')->name('teknisi.dashboard');

// Route untuk pesanan
Route::middleware(['auth'])->group(function () {
    
});


