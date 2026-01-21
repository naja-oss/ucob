<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

/* HOME */
Route::get('/', [SiswaController::class, 'welcome']);

/* LOGIN */
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

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
