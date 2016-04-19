<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;

class UserPolicy
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

    public function show(User $user)
    {
        return $user->permission === 'Super';
    }

    public function delete(User $user)
    {
        return $user->permission === 'Super';
    }

    public function permission(User $user)
    {
        return $user->permission === 'Super';
    }

    public function password(User $user)
    {
        return $user->permission === 'Super';
    }
}
