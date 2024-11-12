<?php

use App\Http\Controllers\JewelryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;


Route::resource('customers', CustomerController::class);

Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/jewelries', [JewelryController::class, 'index'])->name('jewelries.index');
Route::get('/jewelries/create', [JewelryController::class, 'create'])->name('jewelries.create');
Route::post('/jewelries', [JewelryController::class, 'store'])->name('jewelries.store');
Route::get('/jewelries/{id}/edit', [JewelryController::class, 'edit'])->name('jewelries.edit');
Route::put('/jewelries/{id}', [JewelryController::class, 'update'])->name('jewelries.update');
Route::delete('/jewelries/{id}', [JewelryController::class, 'destroy'])->name('jewelries.destroy');
