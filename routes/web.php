<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', [SessionController::class, 'check'])->name('check');

//GUEST
Route::prefix('/{locale}')->middleware(['guest', 'set.locale'])->group(function () {
	Route::view('/login', 'main.guest.login')->name('login');
	Route::post('/authenticate', [SessionController::class, 'authenticate'])->name('authenticate');
	Route::view('/signup', 'main.guest.register')->name('view.signup');
	Route::post('/signup', [SessionController::class, 'store'])->name('signup');
	Route::view('/reset', 'main.guest.reset')->name('view.reset');
	Route::post('/password-reset', [PasswordResetController::class, 'send'])->name('password.reset.link');
	Route::get('/password-reset/{email}/{token}', [PasswordResetController::class, 'show'])->name('view.password.reset');
	Route::post('/update-password/{email}/{token}', [PasswordResetController::class, 'update'])->name('password.update');
	Route::get('/account/verify/{token}', [SessionController::class, 'verifyAccount'])->name('user.verify');
});

//AUTH
Route::prefix('/{locale}')->middleware(['auth', 'set.locale'])->group(function () {
	Route::get('/dashboard', [SessionController::class, 'dashboard'])->name('dashboard');
	Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
	Route::get('/by-country', [AdminController::class, 'show'])->name('by.country');
	Route::get('/by-country/all', [AdminController::class, 'sort'])->name('sort');
	Route::get('/by-country/search', [AdminController::class, 'filter'])->name('search');
});
