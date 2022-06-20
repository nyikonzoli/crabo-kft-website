<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CraboController;
use App\Http\Controllers\GearboxController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\BodyworkController;
use App\Http\Controllers\FuelTypeController;

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

//Equipment
Route::get('/admin/kiegeszitok', [EquipmentController::class, 'index'])->middleware('auth.basic')->name('equipment.index');
Route::post('/admin/kiegeszitok', [EquipmentController::class, 'store'])->middleware('auth.basic')->name('equipment.store');
Route::delete('admin/kiegeszitok/{id}', [EquipmentController::class, 'destroy'])->middleware('auth.basic')->name('equipment.destroy');
Route::put('admin/kiegeszitok/{id}', [EquipmentController::class, 'update'])->middleware('auth.basic')->name('equipment.update');

//Bodywork
Route::get('/admin/karosszeriak', [BodyworkController::class, 'index'])->middleware('auth.basic')->name('bodywork.index');
Route::post('/admin/karosszeriak', [BodyworkController::class, 'store'])->middleware('auth.basic')->name('bodywork.store');
Route::delete('admin/karosszeriak/{id}', [BodyworkController::class, 'destroy'])->middleware('auth.basic')->name('bodywork.destroy');
Route::put('admin/karosszeriak/{id}', [BodyworkController::class, 'update'])->middleware('auth.basic')->name('bodywork.update');

//Fuel
Route::get('/admin/uzemanyagok', [FuelTypeController::class, 'index'])->middleware('auth.basic')->name('fuel.index');
Route::post('/admin/uzemanyagok', [FuelTypeController::class, 'store'])->middleware('auth.basic')->name('fuel.store');
Route::delete('admin/uzemanyagok/{id}', [FuelTypeController::class, 'destroy'])->middleware('auth.basic')->name('fuel.destroy');
Route::put('admin/uzemanyagok/{id}', [FuelTypeController::class, 'update'])->middleware('auth.basic')->name('fuel.update');

///////
//Crabo
///////
Route::get('/', [CraboController::class, 'index'])->name('crabo.index');
