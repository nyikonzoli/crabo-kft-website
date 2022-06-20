<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CraboController;
use App\Http\Controllers\GearboxController;

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

///////
//ADMIN
///////

//Authentication
Route::get('/admin/login', [AuthController::class, 'show']);
Route::post('/admin/login', [AuthController::class, 'login'])->name('auth.login');

//Dashboard
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth.basic')->name('admin.index');

//Gearbox
Route::get('/admin/sebessegvaltok', [GearboxController::class, 'index'])->middleware('auth.basic')->name('gearbox.index');
Route::post('/admin/sebessegvaltok', [GearboxController::class, 'store'])->middleware('auth.basic')->name('gearbox.store');
Route::delete('admin/sebessegvaltok/{id}', [GearboxController::class, 'destroy'])->middleware('auth.basic')->name('gearbox.destroy');
Route::put('admin/sebessegvaltok/{id}', [GearboxController::class, 'update'])->middleware('auth.basic')->name('gearbox.update');

///////
//Crabo
///////
Route::get('/', [CraboController::class, 'index'])->name('crabo.index');
