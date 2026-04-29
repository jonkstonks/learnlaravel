<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => 'Tere-tere',
    'person' => request('person', 'vana kere'),
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');