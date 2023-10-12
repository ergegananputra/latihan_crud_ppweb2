<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;

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

Route::get('/makanan', [MakananController::class, 'index']);

Route::get('/makanan/create', [MakananController::class, 'create'])->name('makanan.create');
Route::post('/makanan', [MakananController::class, 'store'])->name('makanan.store');

Route::post('/makanan/{id}/destroy', [MakananController::class, 'destroy'])->name('makanan.destroy');

Route::get('/makanan/{id}/edit', [MakananController::class, 'edit'])->name('makanan.edit');
Route::post('/makanan/{id}/update', [MakananController::class, 'update'])->name('makanan.update');