<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\CustomerController;

// الصفحة الرئيسية
Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
});

// صفحة الداشبورد
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// مجموعة الصفحات المحمية بـ auth
Route::middleware('auth')->group(function () {
    // الحساب الشخصي للمستخدم
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // صفحات العملاء
    Route::resource('customers', CustomerController::class);

    // صفحات المجوهرات
    Route::get('/jewelries', [JewelryController::class, 'index'])->name('jewelries.index');
    Route::get('/jewelries/create', [JewelryController::class, 'create'])->name('jewelries.create');
    Route::post('/jewelries', [JewelryController::class, 'store'])->name('jewelries.store');
    Route::get('/jewelries/{id}/edit', [JewelryController::class, 'edit'])->name('jewelries.edit');
    Route::put('/jewelries/{id}', [JewelryController::class, 'update'])->name('jewelries.update');
    Route::delete('/jewelries/{id}', [JewelryController::class, 'destroy'])->name('jewelries.destroy');
});

// التوجيهات الخاصة بتسجيل الدخول والتسجيل
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// تسجيل الخروج
Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

