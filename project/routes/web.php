<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;
use App\Models\Cat;
use App\Common\Helpers;
use App\Providers\AppServiceProvider;

Route::get('/', function () {
    return 'Placeholder for home.';
});

// Ideas
Route::middleware('auth')->group(function () {
    Route::get('/ideas', [IdeaController::class, 'index']);
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post('/ideas', [IdeaController::class, 'store']);
    Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
    Route::patch('/ideas/{idea}/', [IdeaController::class, 'update']);
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
    Route::delete('/logout', [SessionsController::class, 'destroy']);
});

// Cats
Route::get('/cats', [CatController::class, 'index']);
Route::get('/cats/random', [CatController::class, 'random']);

// User
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login', [SessionsController::class, 'store']);
});