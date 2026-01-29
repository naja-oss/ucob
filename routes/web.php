<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;

/*auth middleware*/
Route::middleware('auth')->group(function () {

    /* HOME */
    Route::get('/', [SiswaController::class, 'welcome']);

    /* LOGIN */
    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout']);


    /* DASHBOARD */
    Route::get('/siswa/dashboard', [SiswaController::class, 'dashboard'])
        ->name('siswa.dashboard');

    /* SISWA */
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/siswa/tambah', [SiswaController::class, 'create']);
    Route::post('/siswa/tambah', [SiswaController::class, 'store']);
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
    Route::put('/siswa/update/{id}', [SiswaController::class, 'update']);
    Route::get('/siswa/hapus/{id}', [SiswaController::class, 'delete']);
    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy']);

});

/* UMUM */
Route::get('/umum/homepage', [HomeController::class, 'homepage']);
Route::get('/umum/pendaftaran', [HomeController::class, 'pendaftaran']);
Route::post('/umum/simpan/pendaftaran', [HomeController::class, 'storePendaftaran']);
Route::get('/umum/tentang', [HomeController::class, 'tentang']);


/* ADMIN */
Route::get('/admin/admin', [AdminController::class, 'akun']);
Route::get('/admin/edit_admin', [AdminController::class, 'edit']);


