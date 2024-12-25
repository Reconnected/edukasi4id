<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/pelatihan', [PageController::class, 'pelatihan'])->name('pelatihan');
Route::get('/LMS', [PageController::class, 'LMS'])->name('LMS');
Route::get('/mitra', [PageController::class, 'mitra'])->name('mitra');
Route::get('/perusahaan', [PageController::class, 'perusahaan'])->name('perusahaan');
Route::get('/akademi', [PageController::class, 'akademi'])->name('akademi');
Route::get('/konsultan', [PageController::class, 'konsultan'])->name('konsultan');
Route::get('/website_sekolah', [PageController::class, 'website_sekolah'])->name('website_sekolah');
