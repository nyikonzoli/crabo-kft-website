<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/admin/login', [AuthController::class, 'show']);
Route::post('/admin/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth.basic')->name('admin.dashboard.index');