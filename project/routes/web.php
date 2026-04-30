<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;
use App\Models\Cat;
use App\Common\Helpers;

// Ideas
Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::post('/ideas', [IdeaController::class, 'store']);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}/', [IdeaController::class, 'update']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

// Cats
Route::get('/cats', [CatController::class, 'index']);
Route::get('/cats/random', [CatController::class, 'random']);

/* -- siin proovisin ilma controllerita kasse kätte saada --

// index
Route::get('/cats', function () {
    return view('cats.index');
});

// show
Route::get('/cats/random', function () {
    // $cat = Cat::inRandomOrder()->first(); // <-- ilma helperita
    $cat = Helpers::getRandom(Cat::class);

    return view('cats.show', compact('cat'));
});

*/