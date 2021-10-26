<?php
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [MenuController::class, 'home']);
Route::get('/info_kegiatan', [MenuController::class, 'info_kegiatan']);
Route::get('/datasiswa', [MenuController::class, 'data_siswa']);

Auth::routes();
Route::resource('user', UserController::class)->middleware('can:isAdmin');
Route::resource('siswa', SiswaController::class)->middleware('can:isAdmin');
Route::resource('siswa', SiswaController::class)->only('show')->middleware('can:isAdminSiswa');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
