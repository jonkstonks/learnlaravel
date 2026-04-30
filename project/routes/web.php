<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/', function () {
    // $ideas = session()->get('ideas', []);
    // $ideas = DB::table('ideas')->get(); 
    // $ideas = Idea::all(); // eloquent model, tegime terminalis php artisan make:model käsuga
    // $ideas = Idea::where('status', 'pending')->get();
    $ideas = Idea::query()
        ->when(request('status'), function ($query, $status) {
            $query->where('status', $status);
        })
        ->get();


    return view('ideas', [
        'greeting' => 'Hello',
        'person' => request('person', 'Person'),
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        // videos pani siia 'status' => 'pending', aga ma panin selle migratsioonis juba peale
        // Eloquent lisab ise timestampid ka (pole kohaliku aja järgi tho, 4h taga praegu)
    ]);

    return redirect('/'); // redirect back to home
});

// v-- sedasi asju ei tehta päriselt, aga praegu näidiseks sobib --v
// enam ei salvesta kirjeid sessioonis ka 
Route::get('/delete-ideas', function() {
    session()->forget('ideas'); 
    
    return redirect('/');
});

// {{ person }} jaoks voiks lasta sisestada nime ja siis seda sessioonis hoida iguess