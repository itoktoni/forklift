<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', [PublicController::class, 'index'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/services', [PublicController::class, 'services'])->name('services');
Route::get('/articles', [PublicController::class, 'articles'])->name('articles');
Route::match(['POST', 'GET'],'/contact', [PublicController::class, 'contact'])->name('contact');