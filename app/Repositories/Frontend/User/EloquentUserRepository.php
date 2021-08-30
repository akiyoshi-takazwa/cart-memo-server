<?php

namespace App\Repositories\Frontend\User;

use App\Models\User;

class EloquentUserRepository implements UserRepository
{
    /**
     * @param array $attributes
     * @return User
     */
    public function create(array $attributes): User
    {
        return User::create($attributes);
    }
}
