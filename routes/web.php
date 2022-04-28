<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KdcDaily0301Controller;
use App\Http\Controllers\KdcDailyCoalgettingController;
use App\Http\Controllers\KdcDailyRfidController;
use App\Http\Controllers\KdcSIms0305Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\UserController;
use App\Models\KdcDaily0301;
use App\Models\KdcSIms0305;

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



Auth::routes();


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/users/import', [App\Http\Controllers\UsersImportController::class, 'show'])->name('show');
// Route::post('/users/import', [App\Http\Controllers\UsersImportController::class, 'store'])->name('store');

Route::get('/kdcdaily0301/import', [KdcDaily0301Controller::class, 'excel_import'])->name('show');
Route::post('/kdcdaily0301/import', [KdcDaily0301Controller::class, 'excel_store'])->name('store');
Route::get('/kdcdaily0301', [KdcDaily0301Controller::class, 'excel_data'])->name('data');

Route::get('/kdcsims0305/import', [KdcSIms0305Controller::class, 'excel_import'])->name('show');
Route::post('/kdcsims0305/import', [KdcSIms0305Controller::class, 'excel_store'])->name('store');
Route::get('/kdcsims0305', [KdcSIms0305Controller::class, 'excel_data'])->name('data');
