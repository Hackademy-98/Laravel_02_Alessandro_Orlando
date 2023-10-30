<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Definizione Rotte


Route::get('/', [PostController::class, 'index'])->name('homepage');
Route::get('/chi-siamo', [PostController::class, 'chiSiamo'])->name('chi-siamo');
Route::get('/servizi', [PostController::class, 'servizi'])->name('servizi');
Route::get('/articoli/{id}', [PostController::class, 'show'])->name('articolo.dettaglio');



