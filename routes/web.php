<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('front.home');
Route::get('/about', [FrontendController::class, 'about'])->name('front.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('front.contact');

// task
Route::get('task/create', [TaskController::class, 'create'])->name('task.create');