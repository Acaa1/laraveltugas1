<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\castController;


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

Route::get('/', [PerpustakaanController::class, 'anggota'])->name('get_anggota');

Route::get('/buku', [PerpustakaanController::class, 'buku'])->name('get_buku');

Route::get('/petugas', [PerpustakaanController::class, 'petugas'])->name('get_petugas');

Route::get('/about', function() {
    return view('layouts.master');
})->name('get_table');
   