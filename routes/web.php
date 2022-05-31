<?php

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
Route::get('/', 'App\Http\Controllers\Pagescontroller@index');

Route::get('/about', 'App\Http\Controllers\Pagescontroller@about');

Route::get('/services', 'App\Http\Controllers\Pagescontroller@services');

Route::get('/home', 'App\Http\Controllers\Pagescontroller@home')->name("home");

Route::get('/ourlocation', 'App\Http\Controllers\Pagescontroller@ourlocation');

Route::get('/registration', 'App\Http\Controllers\Pagescontroller@registration');

Route::get('/order', 'App\Http\Controllers\Pagescontroller@order');

Route::middleware("auth")->group(function (){
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::middleware("guest")->group(function () {
    Route::get('/signin', [\App\Http\Controllers\AuthController::class, 'ShowLoginForm'])->name('signin');

    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'ShowRegisterForm'])->name('register');

    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'ShowForgotForm'])->name('forgot');

    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});

