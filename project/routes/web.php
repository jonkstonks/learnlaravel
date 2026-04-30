<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

// index
Route::get('/ideas', function () {
    $ideas = Idea::all();

    return view('ideas.index', [
        'ideas' => $ideas,
    ]);
});

// show
Route::get('/ideas/{idea}', function (Idea $idea) { // <-- Route & Model binding
    // $idea = Idea::findOrFail($id); 
    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

// edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});

// update
Route::patch('/ideas/{idea}/', function (Idea $idea) {
    $idea->update([
        'description' => request('description'),
    ]);

    return redirect("/ideas/{$idea->id}");
});

// store
Route::post('/ideas', function () {
    Idea::create([
        'description' => request('description'),
        // videos pani siia 'status' => 'pending', aga ma panin selle migratsioonis juba peale
        // Eloquent lisab ise timestampid ka (pole kohaliku aja järgi tho, 4h taga praegu)
    ]);

    return redirect('/ideas');
});

// destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});


// {{ person }} jaoks voiks lasta sisestada nime ja siis seda sessioonis hoida iguess