<?php

use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', [SessionController::class, 'check']);

//GUEST
Route::prefix('/{locale}')->middleware(['guest', 'set.locale'])->group(function () {
	Route::view('/login', 'main.guest.login')->name('login');
	Route::post('/authenticate', [SessionController::class, 'authenticate'])->name('authenticate');
	Route::view('/signup', 'main.guest.register')->name('view.signup');
	Route::post('/signup', [SessionController::class, 'store'])->name('signup');
	Route::view('/reset', 'main.guest.reset')->name('view.reset');
	Route::post('/password_reset', [PasswordResetController::class, 'send'])->name('password.reset.link');
	Route::get('/password_reset/{email}/{token}', [PasswordResetController::class, 'show'])->name('view.password.reset');
	Route::post('/update-password/{email}/{token}', [PasswordResetController::class, 'update'])->name('password.update');
	Route::get('/account/verify/{token}', [SessionController::class, 'verifyAccount'])->name('user.verify');
});

//AUTH
Route::prefix('/{locale}')->middleware(['auth'])->group(function () {
	Route::get('/dashboard', [SessionController::class, 'dashboard'])->name('dashboard');
});
