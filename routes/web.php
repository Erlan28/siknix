<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login/submit', [LoginController::class, 'login'])->name('user.login');
Route::get('/ormawa/dashboard', [LoginController::class, 'viewOrmawaDashboard'])->name('ormawa.dashboard');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
