<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        return view('cats.index');
    }

    public function random()
    {
        $cat = Cat::inRandomOrder()->first();
        return view('cats.show', compact('cat'));
    }
}
