<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TaskController;

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

// routes/api.php or routes/api/*.php (Laravel 11 用)
Route::apiResource('tasks', TaskController::class);
