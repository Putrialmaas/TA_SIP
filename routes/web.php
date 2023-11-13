<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
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
Route::get('/informasi-prakerin', [WelcomeController::class, 'informasiprak'])->name('informasiprak');
Route::get('/detail', [WelcomeController::class, 'detailinfo'])->name('detailinfo');
Route::get('/login', [LoginController::class, 'index'])->name('login');



Route::get('/home', [SiswaController::class, 'index'])->name('siswa.dashboard');
Route::get('/permohonan-prakerin', [SiswaController::class, 'permohonan'])->name('siswa.permohonan');
Route::get('/pengisian-jurnal', [SiswaController::class, 'jurnal'])->name('siswa.jurnal');
Route::get('/pengumpulan-laporan', [SiswaController::class, 'laporan'])->name('siswa.laporan');
Route::get('/edit-profil', [SiswaController::class, 'pengaturan'])->name('siswa.pengaturan');

Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/permohonan', [AdminController::class, 'permohonan'])->name('admin.permohonan');
Route::get('/data-siswa', [AdminController::class, 'datasiswa'])->name('admin.datasiswa');
Route::get('/data-guru', [AdminController::class, 'dataguru'])->name('admin.dataguru');
Route::get('/data-tempat-prakerin', [AdminController::class, 'datatempatprakerin'])->name('admin.datatempatprakerin');
Route::get('/data-pembagian-pembimbing', [AdminController::class, 'datapembagianpembimbing'])->name('admin.datapembagianpembimbing');
Route::get('/data-informasi-prakerin', [AdminController::class, 'informasiprakerin'])->name('admin.informasiprakerin');
Route::get('/edit-info', [AdminController::class, 'editinfoprak'])->name('admin.editinfoprak');

Route::get('/trash-siswa', [AdminController::class, 'trashsiswa'])->name('admin.trash.trashsiswa');
Route::get('/trash-guru', [AdminController::class, 'trashguru'])->name('admin.trash.trashguru');
Route::get('/trash-pembagian-pembimbing', [AdminController::class, 'trashpembagian'])->name('admin.trash.trashpembagian');
Route::get('/trash-info-prakerin', [AdminController::class, 'trashinfoprak'])->name('admin.trash.trashinfoprak');

Route::get('/dashboard-guru', [GuruController::class, 'index'])->name('guru.dashboard');
Route::get('/siswa-bimbingan', [GuruController::class, 'siswabimbingan'])->name('guru.siswabimbingan');
Route::get('/nilai-laporan', [GuruController::class, 'nilailaporan'])->name('guru.nilailaporan');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
