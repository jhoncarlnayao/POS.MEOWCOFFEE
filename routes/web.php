<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterAccountController;
use App\Http\Controllers\LoginAccountController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('login');
})->name(name: 'login.page');

//$ LOGIN ROUTE: 
Route::post('/login', [LoginAccountController::class, 'login'])->name('login');

Route::post('/logout', [LoginAccountController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view(view: 'register');
})->name(name: 'register');

//$ REGISTER ROUTE:
Route::post('/register', [RegisterAccountController::class, 'register'])->name('register');  

//$ DASHBOARD ROUTE:
Route::middleware(['auth', 'no.cache'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); 
    })->name('dashboard');
});

Route::get('/profile', function () {
    return view('user.profile');
})->name(name: 'user.profile');

