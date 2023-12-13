<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\UmkmController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kegiatankkn', [HomeController::class, 'kkn'])->name('kkn');
Route::get('/umkm', [HomeController::class, 'umkm'])->name('umkm');
Route::get('language/{locale}', [LanguageController::class, 'changeLanguage'])->name('language');


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [PejabatController::class, 'index'])->name('admin');
    Route::resource('pejabat', PejabatController::class);
    Route::resource('umkm', UmkmController::class);
});

Auth::routes();
