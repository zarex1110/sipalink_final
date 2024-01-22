<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SipalinkController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLinkController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [SipalinkController::class, 'index'])->middleware('guest');

Route::get('/dashboard',function(){
    return view('dashboard.dashboard');
})->middleware('auth');

Route::get('/setting',function(){
    return view('dashboard.setting');
})->middleware('auth');

// Route::get('/dashboard/links/create', DashboardLinkController::class)->middleware('auth');

Route::resource('/dashboard/links', DashboardLinkController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
