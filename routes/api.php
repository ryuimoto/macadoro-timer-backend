<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TaskController;

Route::get('/test', [TestController::class, 'index']);

// routes/api.php or routes/api/*.php (Laravel 11 用)
Route::apiResource('tasks', TaskController::class);
