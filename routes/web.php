<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [IndexController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::get('/login-mail', [AuthController::class, 'loginEmailPage'])->name('login.mail');
    Route::post('/login', [LoginController::class, 'login'])->name('user.login');

    Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
    Route::get('/register-mail', [AuthController::class, 'registerEmailPage'])->name('register.mail');
    Route::post('/register', [RegisterController::class, 'save'])->name('user.register');


});

Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::get('/forgotsuccess', [AuthController::class, 'forgotsuccess'])->name('forgotsuccess');
Route::post('/forgot', [AuthController::class, 'forgotProcess'])->name('forgot.process');
