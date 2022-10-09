<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Auth;



Route::get('/', [HomeController::class, 'index']);
Route::middleware('auth')->group(function(){
    Route::get('/show/{pegawai}', [PegawaiController::class, 'show'])->name('pegawai.show');
    Route::get('/pegawai/cari/', [PegawaiController::class, 'cari'])->name('pegawai.cari');
    Route::get('/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::put('/create', [PegawaiController::class, 'store'])->name('pegawai.create');
    Route::get('/{pegawai:id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/{pegawai:id}/edit', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/{pegawai:id}/delete', [PegawaiController::class, 'delete'])->name('pegawai.delete');
});

Auth::routes();

