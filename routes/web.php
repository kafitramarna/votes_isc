<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate');
Route::get('/candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/candidate/store', [CandidateController::class, 'store'])->name('candidate.store');
Route::get('/candidate/{id}/edit', [CandidateController::class, 'edit'])->name('candidate.edit');
Route::put('/candidate/{id}/update', [CandidateController::class, 'update'])->name('candidate.update');
