<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return response("<h1 style='font-family:sans-serif;'>✅ API is running </h1>", 200)
        ->header('Content-Type', 'text/html');
});
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::put('/tasks/{id}', [TaskController::class, 'markCompleted']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
