<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


// All tasks
Route::get('/', [TaskController::class, 'index']);

// Show Create Form
Route::get('/tasks/create', [TaskController::class, 'create'])->middleware('auth');

// Store task Data
Route::post('/tasks', [TaskController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->middleware('auth');

// Update task
Route::put('/tasks/{task}', [TaskController::class, 'update'])->middleware('auth');

// Delete task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->middleware('auth');

// Manage tasks
Route::get('/tasks/manage', [TaskController::class, 'manage'])->middleware('auth');

// Single task
Route::get('/tasks/{task}', [TaskController::class, 'show']);



// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);