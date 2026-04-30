<?php

namespace App\Common;

class Helpers
{
    public static function getRandom($modelClass)
    {
        return $modelClass::inRandomOrder()->first();
    }
}

/* -- kasutamine --

use App\Models\Cat;
use App\Common\Helpers;

Route::get('/cats/random', function () {
    $cat = Helpers::getRandom(Cat::class);

    return view('cats.show', compact('cat'));
});

*/