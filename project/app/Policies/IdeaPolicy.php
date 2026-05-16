<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class IdeaPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Idea $idea): bool
    {
        return $user->is($idea->user); // See tootab t2nu Idea mudelis olevale BelongsTo funktsioonile.
    }

    /**
     * Saab ka sedasi:
     * Kui sisselogitud kasutaja id === ideas tabeli user_id,
     * siis on kasutajal 6igus seda n2ha.
     * Kui need ei klapi, siis n2eb kasutaja 404 errorit.
     * return $user->id === $idea->user_id ? Response::allow() : Response::denyAsNotFound();
    */
}
        