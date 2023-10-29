<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/home', [SiswaController::class, 'index'])->name('siswa.dashboard');
Route::get('/permohonan-prakerin', [SiswaController::class, 'permohonan'])->name('siswa.permohonan');
Route::get('/pengisian-jurnal', [SiswaController::class, 'jurnal'])->name('siswa.jurnal');
Route::get('/pengumpulan-laporan', [SiswaController::class, 'laporan'])->name('siswa.laporan');

Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('admin.dashboard');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
