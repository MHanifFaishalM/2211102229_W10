<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return redirect('/film');
});

Route::resource('film', FilmController::class);

Route::get('/film', [FilmController::class, 'index'])->name('film.index');

// Tampilkan form tambah buku
Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');

// Simpan buku baru
Route::post('/film', [FilmController::class, 'store'])->name('film.store');

// Tampilkan form edit buku
Route::get('/film/{id}/edit', [FilmController::class, 'edit'])->name('film.edit');

// Update buku
Route::put('/film/{id}', [FilmController::class, 'update'])->name('film.update');

// Hapus buku
Route::delete('/film/{id}', [FilmController::class, 'destroy'])->name('film.destroy');


