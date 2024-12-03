<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

Route::get('/create-user', [DashboardController::class, 'createUser'])->name('create_user');

Route::Post('/create-user', [DashboardController::class, 'storeUser'])->name('user.store');

Route::get('/logout', function () {
    Session::flush();
    return redirect('/login')->with('status', 'You have been logged out successfully.');
});

