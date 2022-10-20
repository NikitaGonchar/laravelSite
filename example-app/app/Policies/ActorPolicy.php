<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActorPolicy
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
    public function create(User $user){
        return $user->role === 'admin';
    }
    public function edit(User $user){
        return $user->role === 'admin';
    }
    public function delete(User $user){
        return $user->role === 'admin';
    }
}
