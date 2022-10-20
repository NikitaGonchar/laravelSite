<?php

namespace App\Policies;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MoviePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }
    public function edit(User $user, Movie $movie)
    {
        return $user->id === $movie->user_id;
    }
    public function delete(User $user, Movie $movie){
        return $user->id === $movie->user_id;
    }
}
