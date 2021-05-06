<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('publicacion/{publication:slug}', [PageController::class, 'publication'])->name('publication');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
