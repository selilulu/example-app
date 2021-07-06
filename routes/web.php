<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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



// this is the root of the app 
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/login', [LoginController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/logout', [LogoutController::class, 'logout']);

Route::get('/index', [PostController::class, 'index'])->name('index');
Route::post('/index', [PostController::class, 'store']);
