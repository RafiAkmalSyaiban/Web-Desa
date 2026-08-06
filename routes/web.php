<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetaDesaController;
use App\Http\Controllers\PengajuanController; // ← tambahkan ini
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/struktur-organisasi', [StrukturController::class, 'index'])->name('struktur');
Route::get('/struktur-organisasi/{index}', [StrukturController::class, 'profil'])->name('struktur.profil');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/peta-desa', [PetaDesaController::class, 'index'])->name('peta');

// Menu Informasi
Route::get('/informasi/pengajuan-penerbitan', [PengajuanController::class, 'penerbitan'])->name('pengajuan.penerbitan');
Route::get('/informasi/pengajuan-adminduk', [PengajuanController::class, 'admininduk'])->name('pengajuan.admininduk');
Route::get('/informasi/pengajuan-kk', [PengajuanController::class, 'kk'])->name('pengajuan.kk');
Route::get('/informasi/jalur-pengajuan', [PengajuanController::class, 'jalur'])->name('pengajuan.jalur');
Route::get('/informasi/formulir', [PengajuanController::class, 'formulir'])->name('pengajuan.formulir');
Route::post('/informasi/formulir', [PengajuanController::class, 'formulirStore'])->name('pengajuan.formulir.store');
