<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\AdminController;

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
    return view('landingpage');
});


Auth::routes();

// Route::middleware(['auth', 'CheckRole:admin'])->group(function () {
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::resource('kematian', KematianController::class);
    Route::get('cetakPDF',[KematianController::class,'cetakPDF'])->name('cetakPDF');
    Route::get('generate-pdf',[AdminController::class,'generatePDF'])->name('generate-pdf');
});
Route::middleware(['auth', 'pamong'])->group(function () {
    Route::resource('kematian', KematianController::class);
    Route::resource('pengguna', PenggunaController::class);

    // tambahkan rute lain yang hanya dapat diakses oleh pengguna biasa
});
Route::middleware(['auth', 'user'])->group(function () {
    Route::resource('pengguna', PenggunaController::class);
    // tambahkan rute lain yang hanya dapat diakses oleh pengguna biasa
});



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', function () {
//     return 'Admin Dashboard';
// })->middleware('role:admin');