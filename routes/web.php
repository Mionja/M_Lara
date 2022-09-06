<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;


// Show Login Form
Route::get('/', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->name('register');

// Create New User
Route::post('/users', [UserController::class, 'store'])->name('store_user');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');



Route::resource('task', TaskController::class)->middleware('auth');

// Search tasks
Route::post('/task/search', [TaskController::class, 'search'])->name('search')->middleware('auth');

// Manage tasks
Route::get('/tasks/manage', [TaskController::class, 'manage'])->middleware('auth');
