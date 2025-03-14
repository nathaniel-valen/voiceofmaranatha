<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/', [DataController::class, 'index'])->name('home');

Route::get('/divisi/{id}', [DataController::class, 'showDivisi'])->name('divisi.show');
Route::get('/berita/{id}', [DataController::class, 'showBerita'])->name('berita.show');
Route::get('/galeri', [DataController::class, 'showGaleri'])->name('galeri.show');
