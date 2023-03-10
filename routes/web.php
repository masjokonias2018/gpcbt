<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;

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
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::patch('/siswa', [SiswaController::class, 'update'])->name('siswa.edit');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.tambah');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.hapus');
