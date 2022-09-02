<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKegiatanController;
use App\Http\Controllers\DashboardButirsController;
use App\Http\Controllers\DashboardUsersController;

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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"]);
});

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// halaman register 
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/kegiatans', DashboardKegiatanController::class)->middleware('auth');
Route::get('/dashboard/butirs/checkSlug', [DashboardButirsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/butirs', DashboardButirsController::class)->middleware('auth');
Route::resource('/dashboard/users', DashboardUsersController::class)->middleware('auth');
