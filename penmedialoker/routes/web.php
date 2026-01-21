<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->name('user.index');

// require __DIR__.'/auth.php';


