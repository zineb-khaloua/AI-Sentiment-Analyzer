<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommentController;



Route::get('/dashboard', [CommentController::class, 'dashboard'])->name('dashboard');

Route::get('/create',[CommentController::class,'create'])->name('create');
Route::post('/store', [CommentController::class, 'store'])->name('store');

Route::get('/results', [CommentController::class, 'results'])->name('results');




