<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\ProfileController; 
use \App\Http\Controllers\EventController;

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

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', [EventController::class, 'index'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/create', [EventController::class, 'create'])->name('event.create');
Route::post('/create', [EventController::class, 'store'])->name('event.store');

Route::get('/dashboard/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::post('/dashboard/{id}/edit', [EventController::class, 'update'])->name('event.update');

Route::delete('/dashboard/{id}/delete', [EventController::class, 'destroy'])->name('event.destroy');