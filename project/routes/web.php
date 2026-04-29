<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas', []);

    // dd($ideas); // kuvab sessioonis salvestatud ideed

    return view('ideas', [
        'greeting' => 'Hello',
        'person' => request('person', 'Person'),
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea'); // fetching the idea

    session()->push('ideas', $idea); // pushing it to the session that is named 'ideas'

    return redirect('/'); // redirect back to home
});

// v-- sedasi asju ei tehta päriselt, aga praegu näidiseks sobib --v
Route::get('/delete-ideas', function() {
    session()->forget('ideas'); 
    
    return redirect('/');
});