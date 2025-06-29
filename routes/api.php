<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// User registration route
Route::post('/register', [UserController::class, 'register']);

// Task routes
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/task/{id}', [TaskController::class, 'show']);
Route::post('/task', [TaskController::class, 'store']);
Route::put('/task/{id}', [TaskController::class, 'markCompleted']);
Route::delete('/task/{id}', [TaskController::class, 'destroy']);
