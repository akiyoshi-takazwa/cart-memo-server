<?php

namespace Packages\Infrastructure\Repositories\Frontend\User;

use Packages\Domain\User\UserRepositoryInterface;
use Packages\Infrastructure\EloquentModels\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param array $attributes
     * @return User
     */
    public function create(array $attributes): User
    {
        $user = new User($attributes);
        $user->save();

        return User::find($attributes['id']);
    }
}
