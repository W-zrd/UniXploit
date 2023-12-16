<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', [PegawaiController::class, 'index'])->name('home');
Route::get('/pegawai/{id}', [PegawaiController::class, 'showData'])->name('showData');
Route::post('/update/pegawai/{id}', [PegawaiController::class, 'updateData'])->name('updateData');
Route::get('/delete/pegawai/{id}', [PegawaiController::class, 'deleteData'])->name('deleteData');
Route::get('/create-user', [PegawaiController::class, 'showCreateForm'])->name('showCreateForm');
Route::post('/create-user', [PegawaiController::class, 'storeNewUser'])->name('storeNewUser');