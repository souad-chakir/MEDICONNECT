<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

Route::view('/', 'welcome')->name('home');

Route::group(['middleware' => 'guest'], function () {Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
  Route::post('login', [LoginController::class, 'login'])->name('login');
  Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
  Route::post('register', [RegisterController::class, 'register'])->name('register');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');